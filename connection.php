<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "log_in";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("Failed to connect");
}