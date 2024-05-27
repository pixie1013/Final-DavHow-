<?php

$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "davhow"; 

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

if (!empty($email) && !empty($message)  && !empty($title) && (!empty($fname) || !empty($lname))) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $stmt = $conn->prepare("INSERT INTO contact (first_name, last_name, email, mobile_number, message, title) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fname, $lname, $email, $mobile_number, $message, $title);

        if ($stmt->execute()) {
            echo "Your message has been successfully sent";
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

