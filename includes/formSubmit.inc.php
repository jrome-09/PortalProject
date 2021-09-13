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

    $flname = str_replace(" ", "", $username);
    //Upload Resume
    $resume_filename = submit_resume($resume, $flname, $uid);

    if (!$resume_filename) {
        $resume_filename = "None";
    }
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

    $update_result = UpdateDetails($conn, $first_name, $middle_name, $last_name, $age, $sex, $contact_number, $address, $experience, $self, $new_profile, $uemail);

    $user_name = $first_name . " " . $last_name;

    $university = $_POST['university'];
    $university_address = $_POST['university_address'];
    $year = $_POST['graduation_year'];
    $field = $_POST['field'];

    $save_college_result = update_college_details($conn, $uemail, $user_name, $university, $university_address, $year, $field);

    if ($update_result && $save_college_result) {
        echo "Success";
    }
}

//User Work Experience Setup

if (isset($_POST['college_setup03_form'])) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $uemail = $_SESSION['uemail'];
    $uid = uidExists($conn, $uemail);
    $employer_name = $_POST['employer_name'];
    $employer_address = $_POST['employer_address'];
    $job_title = $_POST['job_title'];
    $specialization = $_POST['specialization'];
    $industry = $_POST['industry'];
    $position_level = $_POST['position_level'];
    $income = $_POST['monthly_salary'];
    $experience = $_POST['experience_description'];

    $data = [$employer_name, $employer_address, $job_title, $specialization, $industry, $position_level, $income, $experience];

    if ($uid) {
        $user_name = $_SESSION["username"];
        $user_id = $uid['_id'];
        $check_uid = check_userExperienceID_exist($conn, $user_id);
        $user_type = "jobseeker";

        if ($check_uid) {
            // echo "Alert: Uid Exist! Update";
            $update = update_user_experience($conn, $employer_name, $employer_address, $job_title, $specialization, $industry, $position_level, $income, $experience, $uid['_id']);
            if ($update) {
                echo "Success";
            }
            exit();
        } else {
            // echo "Alert: Uid Do not Exist! Insert";
            $insert = insert_user_experience($conn, $user_id, $user_name, $employer_name, $employer_address, $job_title, $specialization, $industry, $position_level, $income, $experience, $user_type);
            if ($insert) {
                echo "Success";
            }

            exit();
        }
    }
}

if (isset($_POST['employer_registration_form'])) {
    $emp_fname = $_POST["employer_fname"];
    $emp_mname = $_POST["employer_mname"];
    $emp_lname = $_POST["employer_lname"];
    $company_name = $_POST["comp-name"];
    $contact_number = $_POST["contact_number"];
    $company_address = $_POST["company-address"];
    $email_address = $_POST["e-address"];
    $password = password_hash($_POST["emp-pword"], PASSWORD_DEFAULT);
    $file = $_FILES['company_logo'];
    $company_logo = submit_logo($file, $company_name);

    if (emp_uidExists($conn, $email_address)) {
        exit("Email is already taken");
    } else {
        $sql = "INSERT INTO `employer_details`(`first_name`, `middle_name`, `last_name`, `company_name`, `contact_number`, `company_address`, `email_address`, `password`, `company_logo`) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return 'statement_error: user_experienc_insert';
            exit();
        }
        mysqli_stmt_bind_param($stmt, "sssssssss", $emp_fname, $emp_mname, $emp_lname, $company_name, $contact_number, $company_address, $email_address, $password, $company_logo);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        echo "Registration Complete";
    }
}

if (isset($_POST['resume_input'])) {
    $file = $_POST['resume_input'];
    if (file_exists($file)) {
        $fileurl = $file;
        header("Content-type:application/docs/pdf");
        header('Content-Disposition: attachment; filename=' . $fileurl);
        readfile( $fileurl );
    }
}
