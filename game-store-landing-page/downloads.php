<?php
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

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (email, downloaded_at, device_type) VALUES (?, NOW(), ?)");
    $stmt->bind_param("ss", $email, $operatingSystem);

    if ($stmt->execute()) {
        // Get the user_id of the inserted record
        $userId = $conn->insert_id;

        // Generate a unique download link
        $uniqueToken = bin2hex(random_bytes(16)); // Generate a random token
        $downloadLink = $userId . '-' . $uniqueToken;

        // Insert the download record into the 'downloads' table
        $downloadSql = "INSERT INTO downloads (user_id, download_date, download_link) VALUES ($userId, NOW(), '$downloadLink')";
        if ($conn->query($downloadSql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error inserting download record: " . $conn->error;
        }
    } else {
        echo "Error inserting user record: " . $stmt->error;
    }

    // Close the statements and the database connection
    $stmt->close();
    $conn->close();
}
?>
