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

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$response = [];

if ($id > 0) {
    $selectSql = "SELECT * FROM contact WHERE message_id = ?";
    $updateSql = "UPDATE contact SET is_read = 1 WHERE message_id = ?";
    
    // Prepare and execute SELECT query
    $stmtSelect = $conn->prepare($selectSql);
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();
    $row = $result->fetch_assoc();

    // Mark the message as read
    $stmtUpdate = $conn->prepare($updateSql);
    $stmtUpdate->bind_param("i", $id);
    $stmtUpdate->execute();
    
    // Close the statement for UPDATE query
    $stmtUpdate->close();

    if ($row) {
        $response = $row;
        $response['message_id'] = $id; // Add message ID to the response
    } else {
        $response['error'] = "No data found.";
    }

    // Close the statement for SELECT query
    $stmtSelect->close();
} else {
    $response['error'] = "Invalid ID.";
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
