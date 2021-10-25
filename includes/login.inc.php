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
        $_SESSION["username"] = $uidExists["first_name"] . " " . $uidExists["last_name"];

        if ($_SESSION["username"] === "Undefined Undefined") {
            $_SESSION['username'] = 'username';
        }

        echo "logged in.";
        exit();
    }
}

if (isset($_POST['employer_login'])) {
    $email = $_POST['login_email-emp'];
    $password = $_POST['login_password'];

    $emp_exist = emp_uidExists($conn, $email);

    if (!$emp_exist) {
        echo "email does not exist.";
        exit();
    }

    $pwdEncrypt = $emp_exist["password"];
    $checkPwd = password_verify($password, $pwdEncrypt);

    if (!$checkPwd) {
        echo "wrong password.";
        exit();
    } else {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['emp_uid'] = $emp_exist['_id'];
        $_SESSION['emp_email'] = $emp_exist['email_address'];
        $_SESSION['emp_fname'] = $emp_exist['first_name'];
        $_SESSION['emp_mname'] = $emp_exist['middle_name'];
        $_SESSION['emp_lname'] = $emp_exist['last_name'];
        echo "logged in.";
        exit();
    }
}

if (isset($_POST['admin_login'])) {
    $username = $_POST['admin_username'];
    $password = $_POST['admin_password'];

    $uEx = get_admin($conn, $username);

    if (!$uEx) {
        echo 'invalid username.';
        exit;
    }

    $checkp = password_verify($password, $uEx['password']);

    if (!$checkp) {
        echo 'wrong password.';
        exit;
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        session_unset();
        session_destroy();

        session_start();
        $_SESSION['admin'] = $username;
        echo "logged in.";
    }
}
