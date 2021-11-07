<?php
require "db_connection.inc.php";
require "functions.inc.php";

$email = $_POST['email'];
$password = $_POST['password'];

$uidExists = uidExists($conn, $email);

if ($uidExists === false) {
    $encrypted = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `jobseeker`(`first_name`, `middle_name`, `last_name`, `age`, `sex`, `contact_number`, `address`, `experience_type`, `email_address`, `password`, `self_description`, `user_profile`, `date_updated`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,now())";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'Statement Error';
        exit();
    }
    $None = "Undefined";
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $None, $None, $None, $None, $None, $None, $None, $None, $email, $encrypted, $None, $None);
    mysqli_stmt_execute($stmt);

    if (!isset($_SESSION)) {
       session_start();
    }
    $_SESSION['uid'] = uidExists($conn, $email)['_id'];
    $_SESSION["uemail"] = $email;
    $_SESSION["pass"] = $encrypted;
    $_SESSION['username'] = 'username';
    
    $insert_college_details = insert_college($conn, $email);

    echo 'Data Inserted Successfully!';
} else {
    echo 'Email already exist.';
}
