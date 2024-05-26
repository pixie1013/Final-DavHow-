<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    // Fetch the data from the database based on the ID
    $sql = "SELECT * FROM your_table WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        echo "Date: " . $row['date'] . "<br>";
        echo "Sender: " . $row['sender'] . "<br>";
        echo "Title: " . $row['title'] . "<br>";
        echo "Message: " . $row['message'] . "<br>";
    } else {
        echo "No data found.";
    }
} else {
    echo "Invalid ID.";
}
?>
