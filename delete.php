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

if ($id > 0) {
    $sql = "DELETE FROM messages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: adminpanel_usermessages.php");
        exit();
    } else {
        echo "Error deleting record.";
    }

    $stmt->close();
} else {
    echo "Invalid ID.";
}

$conn->close();
?>
