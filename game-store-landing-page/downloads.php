<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path accordingly

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST["email"];

    // Get the user agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Function to extract the operating system from the user agent string
    function getOS($userAgent) {
        $os = "unknown";
    
        if (preg_match('/windows|win32/i', $userAgent)) {
            $os = "Windows";
        } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
            $os = "Mac OS";
        } elseif (preg_match('/linux/i', $userAgent)) {
            $os = "Linux";
        } elseif (preg_match('/android/i', $userAgent)) {
            $os = "Android";
        } elseif (preg_match('/iphone|ipad|ipod/i', $userAgent)) {
            $os = "iOS";
        }
    
        return $os;
    }
    
    // Determine the operating system
    $operatingSystem = getOS($userAgent);

    // Establish a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "downloads_game_users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email already exists
    $checkStmt = $conn->prepare("SELECT user_id, public_id FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        // Email already exists, return a message to the user
        $checkStmt->bind_result($userId, $publicId);
        $checkStmt->fetch();

        echo "<script>alert('You have already registered. Kindly check your email for download link');";
        echo "window.location.href = 'downloadform.php';</script>";
    } else {
        // Email does not exist, insert a new record
        $insertStmt = $conn->prepare("INSERT INTO users (email, created_at, device_type, public_id) VALUES (?, NOW(), ?, ?)");

        // Generate a unique public ID
        $publicId = bin2hex(random_bytes(11));

        $insertStmt->bind_param("sss", $email, $operatingSystem, $publicId);

        if ($insertStmt->execute()) {
            // New record inserted successfully

            // Generate a unique download link
            $uniqueToken = bin2hex(random_bytes(11));
            $downloadLink = $userId . '-' . $uniqueToken;

            // Send email with PHPMailer
            try {
                // Server settings
                $mail->SMTPDebug = 2; // Enable verbose debug output
                $mail->isSMTP();
                $mail->Host = 'mail.yeolom.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'contact@yeolom.com';
                $mail->Password = 'Olom@l123';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender information
                $mail->setFrom('contact@yeolom.com', 'Yeolom contact');

                // Recipient
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Download Link for Game';
                $mail->Body = "Thank you for registering!\n\nHere is your download link: $downloadLink\nYour Public ID: $publicId";

                // Send the email
                $mail->send();
                echo "<script>alert('Thank you for registering! An email has been sent with your download link and public ID.');</script>";
                echo "<script>window.location.href = 'downloadform.php';</script>";
            } catch (Exception $e) {
                echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        } else {
            echo "Error inserting user record: " . $insertStmt->error;
        }
    
        $insertStmt->close();
    }

    // Close the statements and the database connection
    $checkStmt->close();
    $conn->close();
}
?>
