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
    $sql = "SELECT * FROM user_messages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $response = $row;
    } else {
        $response['error'] = "No data found.";
    }

    $stmt->close();
} else {
    $response['error'] = "Invalid ID.";
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
