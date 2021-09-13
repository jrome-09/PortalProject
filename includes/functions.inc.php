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

function get_college($conn, $uid)
{
    $sql = "SELECT * FROM college_details WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $uid);
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

function get_job($conn, $id)
{
    $sql = "SELECT * FROM job_description WHERE _id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
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

function get_experience($conn, $uid)
{
    $sql = "SELECT * FROM user_experience WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $uid);
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

// function UpdateDetails($conn, $first_name, $last_name, $contact_number, $address, $experience_type, $email_address, $password, $self_desc)
// {
//     $sql = "UPDATE `jobseeker` SET `first_name`=?,`last_name`=?,`contact_number`=?,`address`=?,`experience_type`=?,`email_address`=?,`password`=?,`self_description`=? WHERE `email_address` = ?";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         return 'statement_error: update';
//         exit();
//     }
//     mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $contact_number, $address, $experience_type, $email_address, $password, $self_desc, $email_address);
//     mysqli_stmt_execute($stmt);
//     $_SESSION["username"] = $first_name . " " . $last_name;

//     return true;
//     mysqli_stmt_close($stmt);
// }

function UpdateDetails($conn, $first_name, $middle_name, $last_name, $age, $sex, $contact_number, $address, $experience_type, $self_desc, $user_profile, $email_address)
{
    $sql = "UPDATE `jobseeker` SET `first_name`=?,`middle_name`=?,`last_name`=?,`age`=?,`sex`=?,`contact_number`=?,`address`=?,`experience_type`=?,`self_description`=?,`user_profile`=? WHERE email_address = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return 'statement_error: update';
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssisssssss", $first_name, $middle_name, $last_name, $age, $sex, $contact_number, $address, $experience_type, $self_desc, $user_profile, $email_address);
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

function submit_resume($resume, $uname, $uid)
{
    $file = $resume;
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf', 'doc', 'docx');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $NewFileName = "resume_" . $uname . "_" . $uid .  "." . $fileActualExt;
            $fileDestination = '../uploads/resume/' . $NewFileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            return $fileDestination;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function submit_application($conn, $uid, $username, $job_id, $job_name, $employer_id, $employer_name, $resume_filename)
{
    $sql = "INSERT INTO `application`(`applicant_id`, `applicant_name`, `job_id`, `job_title`, `employer_id`, `employer_name`, `applicant_resume`, `application_status`, `date_created`) VALUES ('$uid', '$username', '$job_id', '$job_name', '$employer_id', '$employer_name', '$resume_filename', 'Under Review', now())";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function get_application($conn, $uid, $job_id)
{
    $sql = "SELECT * FROM application WHERE applicant_id = ? and job_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ii", $uid, $job_id);
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

function get_emp($conn, $id)
{
    $sql = "SELECT * FROM employer_details WHERE _id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>console.log('Statement Error')</script>";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
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

function submit_profile($profile, $uid)
{
    $file = $profile;
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $NewFileName = "profile_" . $uid .  "." . $fileActualExt;
            $fileDestination = '../uploads/profiles/' . $NewFileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            return $fileDestination;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function submit_logo($logo, $c_name)
{
    $file = $logo;
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $NewFileName = "company_" . $c_name .  "." . $fileActualExt;
            $fileDestination = '../uploads/company_logos/' . $NewFileName;
            move_uploaded_file($fileTmpName, $fileDestination);
            return $fileDestination;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function emp_uidExists($conn, $email)
{
    $sql = "SELECT * FROM employer_details WHERE email_address = ?;";
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

function get_postedjobs($conn, $eid)
{
    $sql = "SELECT * FROM job_description WHERE employer_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $eid);
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

function getApplicants($conn, $jid)
{
    $sql = "SELECT * FROM application WHERE job_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Error";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $jid);
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

