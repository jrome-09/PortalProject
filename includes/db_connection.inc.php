<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "portal_db";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}