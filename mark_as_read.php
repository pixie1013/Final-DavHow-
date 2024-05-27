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
$response = ['success' => false];

if ($id > 0) {
    // Get current status
    $sql = "SELECT is_read FROM user_messages WHERE message_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $newStatus = !$row['is_read'];
        // Update the status
        $updateSql = "UPDATE user_messages SET is_read = ? WHERE message_id = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ii", $newStatus, $id);
        if ($updateStmt->execute()) {
            $response['success'] = true;
        }
        $updateStmt->close();
    }

    $stmt->close();
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
