<?php
require "../../includes/db_connection.inc.php";
require "../../includes/functions.inc.php";
if (!isset($_SESSION)) {
    session_start();
}

$emp_email = $_SESSION['emp_email'];

$emp = emp_uidExists($conn, $emp_email);
$eid = $emp['_id'];
$emp_name = $emp['first_name'] . " " . $emp['last_name'];

$tt = $_POST['job_title'];
$jt = $_POST['job_type'];
$lv = $_POST['position_level'];

$lv = str_replace("\n", "", $lv);
$lv = str_replace("\r", "", $lv);

$lc = $_POST['job_location'];
$sp = $_POST['specialization'];
$sp = str_replace("\n", "", $sp);
$sp = str_replace("\r", "", $sp);

$slr = $_POST['salary01'] . " - " . $_POST['salary02'];
$rq = $_POST['requirements'];
$ql = $_POST['qualifications'];
$rs = $_POST['responsibilities'];
$jd = $_POST['job_description'];

$un = 'Unverified';
$nn = 'None';

//$sql = "INSERT INTO `job_description`(`employer_id`, `employer_name`, `job_title`, `salary_range`, `job_address`, `job_type`, `career_level`, `job_requirements`, `job_qualifications`, `job_responsibilities`, `job_specialization`, `job_info`, `verification`, `company_logo`, `date_posted`) VALUES ('$eid', '$emp_name', '$tt', '$slr', '$lc', '$jt','$lv', '$rq', '$ql', '$rs', '$sp', '$jd', '$un', '$nn', now())";

// if ($conn->query($sql) === TRUE) {
//     echo "Success";
// }else {
//     echo 'failed:' . $conn->error;
// }

$stmt = $conn->prepare("INSERT INTO job_description (employer_id, employer_name, job_title, salary_range, job_address, job_type, career_level, job_requirements, job_qualifications, job_responsibilities, job_specialization, job_info, verification, date_posted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now())");
$stmt->bind_param("issssssssssss", $eid, $emp_name, $tt, $slr, $lc, $jt, $lv, $rq, $ql, $rs, $sp, $jd, $un);

if ($stmt->execute()) {
    echo "Success";
} else {
    echo 'failed:' . $conn->error;
}

$stmt->close();
$conn->close();
