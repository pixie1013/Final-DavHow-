<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "davhow";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = $_GET['query'];
$sql = "SELECT DISTINCT documents FROM document_list WHERE documents LIKE '%$query%'";
$result = $conn->query($sql);

$suggestions = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $suggestions[] = $row['documents'];
    }
}

$conn->close();

echo json_encode($suggestions);