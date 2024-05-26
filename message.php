<?php

$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "davhow"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = isset($_POST['first-name']) ? $_POST['first-name'] : '';
$lname = isset($_POST['last-name']) ? $_POST['last-name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$mobile_number = isset($_POST['mobile-number']) ? $_POST['mobile-number'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

if (!empty($email) && !empty($message) && (!empty($fname) || !empty($lname))) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO messages (first_name, last_name, email, mobile_number, message, title) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fname, $lname, $email, $mobile_number, $message, $title);

        if ($stmt->execute()) {
            echo "Your message has been stored in the database";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo "Email, name, and message fields are required";
}

$conn->close();

?>
