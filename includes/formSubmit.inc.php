<?php
require "db_connection.inc.php";
require "functions.inc.php";
// if (isset($_POST['firstname'])) {
//     session_start();
//     $first_name = $_POST['firstname'];
//     $last_name = $_POST['lastname'];
//     $contact_number = $_POST['contactnumber'];
//     $address = $_POST['address'];
//     $experience_type = $_POST['expType'];
//     $email_address = $_SESSION['uemail'];
//     $password = $_SESSION['pass'];
//     $self_desc = $_POST['selfDescription'];

//     $update_result = UpdateDetails($conn, $first_name, $last_name, $contact_number, $address, $experience_type, $email_address, $password, $self_desc);

//     $university_name = $_POST['university'];
//     $university_address = $_POST['university-address'];
//     $graduation_year = $_POST['graduation_year'];
//     $selected_field = $_POST['field'];

//     $user_name = $first_name . " " . $last_name;

//     $save_college_result = update_college_details($conn, $email_address, $user_name, $university_name, $university_address, $graduation_year, $selected_field);

//     if ($update_result && $save_college_result) {
//         echo "Data Inserted Successfully!";
//     }
// }

if (isset($_POST['company_name'])) {
    session_start();
    $user_email = $_SESSION['uemail'];
    $employer_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $position_title = $_POST['position_title'];
    $specialization = $_POST['specialization'];
    $industry = $_POST['industry'];
    $position_level = $_POST['position_level'];
    $monthly_salary = $_POST['monthly_salary'];
    $experience_description = $_POST['experience_description'];

    $data = [$employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description];
    $data_result;

    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] === "") {
            $data_result = false;
        } else {
            $data_result = true;
            break;
        }
    }

    if (!$data_result) {
        echo "Skip";
    } else {

        $get_user_id = uidExists($conn, $user_email);

        if ($get_user_id) {

            $user_name = $_SESSION["username"];
            $user_id = $get_user_id['_id'];
            $check_uid = check_userExperienceID_exist($conn, $user_id);
            $user_type = "jobseeker";

            if ($check_uid) {
                // echo "Alert: Uid Exist! Update";
                $update = update_user_experience($conn, $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_id);
                if ($update) {
                    echo "Data Updated";
                }
                exit();
            } else {
                // echo "Alert: Uid Do not Exist! Insert";
                $insert = insert_user_experience($conn, $user_id, $user_name, $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_type);
                if ($insert) {
                    echo "Data Inserted";
                }

                exit();
            }
        }
    }
}

if (isset($_POST["resume_file"])) {

    session_start();
    $uid = $_SESSION["uid"];
    $username = $_SESSION["username"];
    $job_id = $_POST["job_id"];
    $job_name = $_POST["job_name"];
    $employer_id = $_POST["employer_id"];
    $employer_name = $_POST["employer_name"];
    $resume = $_FILES["uploaded_resume_file"];

    //Upload Resume
    $resume_filename = submit_resume($resume, $uid);

    //Add to Database
    if ($resume_filename) {
        $submit = submit_application($conn, $uid, $username, $job_id, $job_name, $employer_id, $employer_name, $resume_filename);
        if ($submit) {
            echo "success";
        }
    }
}

//User Profile Setup

if (isset($_POST["profile_setup02_form"])) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $uemail = $_SESSION['uemail'];
    $uid = uidExists($conn, $uemail);
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $contact_number = $_POST['contactnumber'];
    $address = $_POST['address'];
    $experience = $_POST['expType'];
    $self = $_POST['selfDescription'];
    $profile = $_FILES['user_profile'];
    $new_profile = submit_profile($profile, $uid['_id']);

    UpdateDetails($conn, $first_name, $middle_name, $last_name, $age, $sex, $contact_number, $address, $experience, $self, $new_profile, $uemail);
    
    $user_name = $first_name . " " . $last_name;

    $university = $_POST['university'];
    $university_address = $_POST['university_address'];
    $year = $_POST['graduation_year'];
    $field = $_POST['field'];

    update_college_details($conn, $uemail, $user_name, $university, $university_address, $year, $field);
}

//User Work Experience Setup

if (isset($_POST['college_setup03_form'])){
    echo "Heyy !!!!";
}
