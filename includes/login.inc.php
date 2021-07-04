<?php
require "db_connection.inc.php";
require "functions.inc.php";

if (isset($_POST['login_email'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $uidExists = uidExists($conn, $email);

    if ($uidExists === false) {
        echo "email does not exist.";
        exit();
    }

    $pwdEncrypt = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdEncrypt);

    if ($checkPwd === false) {
        echo "wrong password.";
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["uid"] = $uidExists["_id"];
        $_SESSION["uemail"] = $uidExists["email_address"];
        $_SESSION["userpassword"] = $uidExists["password"];
        $_SESSION["firstname"] = $uidExists["first_name"];
        $_SESSION["lastname"] = $uidExists["last_name"];
        $_SESSION["username"] = $uidExists["first_name"]. " " . $uidExists["last_name"];
        echo "logged in.";
        exit();
    }
}
