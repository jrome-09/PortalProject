<?php
function uidExists($conn, $email)
{
    $sql = "SELECT * FROM jobseeker WHERE email_address = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function CheckEducation($university, $year, $field)
{
    $result = "";
    $array = ["university of northern philippines", "Computer Science/Information Technology"];
    if (strtolower($university) === $array[0] && $field === $array[1]) {
        if ($year < 2020) {
            $result = "Alumni";
        } else {
            $result =  "Student";
        }
    } else {
        $result = "User";
    }

    return $result;
}

function UpdateDetails($conn, $first_name, $last_name, $contact_number, $address, $experience_type, $email_address, $password, $self_desc)
{
    $sql = "UPDATE `jobseeker` SET `first_name`=?,`last_name`=?,`contact_number`=?,`address`=?,`experience_type`=?,`email_address`=?,`password`=?,`self_description`=? WHERE `email_address` = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'statement_error: update';
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $contact_number, $address, $experience_type, $email_address, $password, $self_desc, $email_address);
    mysqli_stmt_execute($stmt);
    $_SESSION["username"] = $first_name . " " . $last_name;

    return true;
    mysqli_stmt_close($stmt);
}

function insert_college($conn, $user_email)
{
    $none = "None";

    $sql = "INSERT INTO `college_details`(`user_id`, `user_name`, `university`, `university_address`, `graduation_year`, `field`, `user_type`) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'statement_error: college_insert';
        exit();
    }

    $user_id = uidExists($conn, $user_email);

    mysqli_stmt_bind_param($stmt, "sssssss", $user_id["_id"], $none, $none, $none, $none, $none, $none);
    mysqli_stmt_execute($stmt);

    return true;
    mysqli_stmt_close($stmt);
}

function update_college_details($conn, $email_address, $user_name, $university_name, $university_address, $graduation_year, $field)
{
    $sql = "UPDATE `college_details` SET `user_name`=?,`university`=?,`university_address`=?,`graduation_year`=?,`field`=?,`user_type`=? WHERE `user_id`=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'statement_error: college_save';
        exit();
    }
    $field = str_replace("\n", "", $field);
    $field = str_replace("\r", "", $field);

    $user_id = uidExists($conn, $email_address);

    $user_type = getUser_Type($university_name, $field, $graduation_year);

    mysqli_stmt_bind_param($stmt, "sssssss", $user_name, $university_name, $university_address, $graduation_year, $field, $user_type, $user_id["_id"],);
    mysqli_stmt_execute($stmt);

    return true;
    mysqli_stmt_close($stmt);
    exit();
}

function getUser_type($university_name, $field, $graduation_year)
{
    if (strtolower($university_name) === "university of northern philippines") {
        if ($field === "Computer Science/Information Technology") {
            if ($graduation_year < 2021) {
                return "alumni";
            } else {
                return "student";
            }
        } else {
            return "user";
        }
    } else {
        return "user";
        exit();
    }
}

function check_userExperienceID_exist($conn, $user_ID)
{
    $sql = "SELECT * FROM user_experience WHERE user_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error: Check User ID (Experience)";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $user_ID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function update_user_experience($conn, $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_id)
{
    $sql = "UPDATE `user_experience` SET `employer_name`=? ,`company_address`=? ,`position_title`=? ,`specialization`=? ,`industry`=? ,`position_level`=? ,`monthly_salary`=? ,`experience_description`=? WHERE user_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'statement_error: user_experienc_update';
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssssss", $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_id);
    mysqli_stmt_execute($stmt);

    return true;
    mysqli_stmt_close($stmt);
}

function insert_user_experience($conn, $user_id, $user_name, $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_type)
{
    $data = [$user_id, $user_name, $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_type];

    $sql = "INSERT INTO `user_experience`(`user_id`, `user_name`, `employer_name`, `company_address`, `position_title`, `specialization`, `industry`, `position_level`, `monthly_salary`, `experience_description`, `user_type`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'statement_error: user_experienc_insert';
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssss", $user_id, $user_name, $employer_name, $company_address, $position_title, $specialization, $industry, $position_level, $monthly_salary, $experience_description, $user_type);
    mysqli_stmt_execute($stmt);

    return true;
    mysqli_stmt_close($stmt);
}
