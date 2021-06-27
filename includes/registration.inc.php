<?php
require "db_connection.inc.php";
require "functions.inc.php";

$email = $_POST['email'];
$password = $_POST['password'];

$uidExists = uidExists($conn, $email);

if ($uidExists === false) {
    $encrypted = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `jobseeker`(`first_name`, `last_name`, `contact_number`, `address`, `experience_type`, `email_address`, `password`) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'Statement Error';
        exit();
    }
    $None = "None";
    mysqli_stmt_bind_param($stmt, "sssssss", $None, $None, $None, $None, $None, $email, $encrypted);
    mysqli_stmt_execute($stmt);

    session_start();
    $_SESSION["uemail"] = $email;
    $_SESSION["pass"] = $encrypted;
    
    $insert_college_details = insert_college($conn, $email);

    echo 'Data Inserted Successfully!';
} else {
    echo 'Email already exist.';
}
