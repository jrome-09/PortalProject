<?php
if (isset($_POST["full_name"])) {
    session_start();
    $_SESSION["form01_full_name"] = $_POST["full_name"];
    $_SESSION["form01_phone_numeber"] = $_POST["contact_number"];
    $_SESSION["form01_email_address"] = $_POST["email_address"];
    $_SESSION["form01_address"] = $_POST["address"];
    $_SESSION["form01_age"] = $_POST["age"];
    $_SESSION["form01_sex"] = $_POST["sex"];
    $_SESSION["form01_civil_status"] = $_POST["civil_status"];
    $_SESSION["form01_residence"] = $_POST["residence"];
    $_SESSION["form01_monthly_salary"] = $_POST["monthly_salary"];
    $_SESSION["form01_graduation_year"] = $_POST["graduation_year"];
    $_SESSION["form01_course"] = $_POST["course"];
    $_SESSION["form01_organization_affiliation"] = $_POST["organization_affiliation"];
    $_SESSION["form01_academic_awards"] = $_POST["academic_awards"];
    $_SESSION["form01_ict_certification"] = $_POST["ict_certification"];
}

if (isset($_POST["employment_status"])) {
    $_SESSION["form02_employment_status"] = $_POST["employment_status"];
    echo $_POST["employment_status"];
}


if (isset($_POST["getSession"])) {
    session_start();
    $array = [
        "form01_full_name", "form01_phone_numeber", "form01_email_address", "form01_address", "form01_age",
        "form01_sex", "form01_civil_status", "form01_residence", "form01_monthly_salary", "form01_graduation_year", "form01_course", "form01_organization_affiliation", "form01_academic_awards", "form01_ict_certification"
    ];

    foreach ($array as $value) {
        echo "\r\n" . $_SESSION[$value];
    }
}

//Employed
if (isset($_POST["employer_name"])) {
    $_SESSION["form03-employer-name"] = $_POST["employer_name"];
    $_SESSION["form03-employer-address"] = $_POST["employer_address"];
    $_SESSION["form03-position"] = $_POST["present_position"];
    $_SESSION["form03-type"] = $_POST["employment_type"];
    $_SESSION["form03-monthly-income"] = $_POST["monthly_income"];
    $_SESSION["form03-field"] = $_POST["employment_field"];
    $_SESSION["form03-days"] = $_POST["employment_length"];
    $_SESSION["form03-ict_related"] = $_POST["ict_related"];

    echo "Session saved!";
}

//Self-Employed
if (isset($_POST["self_employed"])) {
    $_SESSION["form03-reasons"] = $_POST["reasons"];
    $_SESSION["form03-business_type"] = $_POST["business_type"];
    $_SESSION["form03-business_name"] =$_POST["business_name"];
    $_SESSION["form03-business_description"] = $_POST["business_description"];
    $_SESSION["monthly_income"] = $_POST["monthly_income"];

    echo "Session saved!";
}

//Unemployed
if (isset($_POST["unemployed"])) {
    $_SESSION["form03-reasons"] = $_POST["reasons"];

    echo "Session saved!";
}

//Experienced Unemployed
if (isset($_POST["experienced_unemployed"])) {
    $_SESSION["form03-employer-name"] = $_POST["employer_name-exp"];
    $_SESSION["form03-recent-position"] = $_POST["recent_position"];
    $_SESSION["form03-reasons"] = $_POST["reasons"];
    
    echo "Session saved!";
}
