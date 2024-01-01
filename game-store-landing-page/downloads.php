<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST["email"];

    // Establish a connection to the MySQL database
    $servername = "localhost"; // Replace with your server name (usually localhost)
    $username = "root"; // Replace with your MySQL username (default is often root)
    $password = ""; // Leave empty if you didn't set a password during installation
    $dbname = "downloads_game_users"; // Replace with the name of your database
    

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the 'users' table
    $sql = "INSERT INTO users (email, downloaded_at, device_type) VALUES ('$email', NOW(), 'unknown')";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the email from the form
        $email = $_POST["email"];
    
        // Establish a connection to the MySQL database
        $servername = "localhost"; // Replace with your server name (usually localhost)
        $username = "root"; // Replace with your MySQL username (default is often root)
        $password = ""; // Leave empty if you didn't set a password during installation
        $dbname = "downloads_game_users"; // Replace with the name of your database
        
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Insert data into the 'users' table
        $sql = "INSERT INTO users (email, downloaded_at, device_type) VALUES ('$email', NOW(), 'unknown')";
    
        if ($conn->query($sql) === TRUE) {
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
            echo "Error inserting user record: " . $conn->error;
        }
    
        // Close the database connection
        $conn->close();
    }
}    