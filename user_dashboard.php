<?php
session_start();
include("connection.php");

$user_name = 'apple';  // Replace with an actual user in your database
$query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    echo "User found: " . print_r($user_data, true);
} else {
    echo "User not found";
}
?>
