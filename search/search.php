<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "davhow";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search term
$search = $_GET['search'];

// Prepare and execute query
$sql = "SELECT id FROM document_list WHERE documents LIKE '%$search%'";
$result = $conn->query($sql);

// Initialize array to store document IDs
$documentIds = array();

// Store document IDs in the array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $documentIds[] = $row['id'];
    }
}

// Close the database connection
$conn->close();

// Return document IDs as JSON
echo json_encode($documentIds);
?>
