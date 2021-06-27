<?php
require "db_connection.inc.php";
require "functions.inc.php";
if (isset($_POST['firstname'])) {
    session_start();
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $contact_number = $_POST['contactnumber'];
    $address = $_POST['address']; 
    $experience_type = $_POST['expType'];
    $email_address = $_SESSION['uemail'];
    $password = $_SESSION['pass'];
    $self_desc = $_POST['selfDescription'];

    $update_result = UpdateDetails($conn, $first_name, $last_name, $contact_number, $address, $experience_type, $email_address, $password, $self_desc);
    
    $university_name = $_POST['university'];
    $university_address = $_POST['university-address'];
    $graduation_year = $_POST['graduation_year'];
    $selected_field = $_POST['field'];

    $user_name = $first_name . " " . $last_name;

    $save_college_result = update_college_details($conn, $email_address, $user_name, $university_name, $university_address, $graduation_year, $selected_field);

    if ($update_result && $save_college_result) {
        echo "Data Inserted Successfully!";
    }
}
