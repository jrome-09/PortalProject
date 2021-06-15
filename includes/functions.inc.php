<?php
function uidExists($conn, $email)
{
    $sql = "SELECT * FROM seekers WHERE email_address = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?error=stmterror");
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
        }else {
            $result =  "Student";
        }
    }else {
        $result = "User";
    }

    return $result;
}
