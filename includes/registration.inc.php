<?php
require "db_connection.inc.php";
require "functions.inc.php";

$email = $_POST['email'];
$password = $_POST['password'];

$uidExists = uidExists($conn, $email);

if ($uidExists === false) {
    $encrypted = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `seekers`(`email_address`, `password`) VALUES (?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?error=stmterror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $email, $encrypted);
    mysqli_stmt_execute($stmt);

    echo 'Data Inserted Successfully!';
    session_start();
    $_SESSION["uemail"] = $email;
    
} else {
    echo 'Email already exist.';
}
