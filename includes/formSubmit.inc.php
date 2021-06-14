<?php
require "db_connection.inc.php";
require "functions.inc.php";
if (isset($_POST['firstname'])) {
    $exp = $_POST['expType'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contactnumber = $_POST['contactnumber'];
    $address = 'Philippines ' . $_POST['address'];
    $university = $_POST['university'];
    $universityAddress = $_POST['university-address'];
    $graduation_year = $_POST['graduation-year'];
    $field = $_POST['field'];
    $selfDescription = $_POST['selfDescription'];

    session_start();

    $userType = CheckEducation($university, $graduation_year);

    $sql = "UPDATE `seekers` SET first_name = ?, last_name = ?, contact_number = ?, user_address = ?, self_description = ?, work_experience = ?, university = ?, university_address = ?, graduation_year = ?, field = ?, user_type = ? WHERE email_address = ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'Statement Error:';
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssisssssisss", $firstname, $lastname, $contactnumber, $address, $selfDescription, $exp, $university, $universityAddress, $graduation_year, $field, $userType, $_SESSION['uemail']);
    mysqli_stmt_execute($stmt);

    // echo 'Data Inserted Successfully!';
    echo $result;
    exit();
}
