<?php
if (isset($_POST["alumni_first_form"])) {
	session_start();
	$_SESSION["form01_first_name"] = $_POST["first_name"];
	$_SESSION["form01_middle_name"] = $_POST["middle_name"];
	$_SESSION["form01_last_name"] = $_POST["last_name"];
	$_SESSION["form01_phone_number"] = $_POST["contact_number"];
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
	session_start();
	$_SESSION["form02_employment_status"] = $_POST["employment_status"];
	echo $_SESSION["form02_employment_status"];
}


//Employed
if (isset($_POST["employer_name"])) {
	session_start();
	$_SESSION["form03_employer_name"] = $_POST["employer_name"];
	$_SESSION["form03_employer_address"] = $_POST["employer_address"];
	$_SESSION["form03_position"] = $_POST["present_position"];
	$_SESSION["form03_type"] = $_POST["employment_type"];
	$_SESSION["form03_monthly_income"] = $_POST["monthly_income"];
	$_SESSION["form03_field"] = $_POST["employment_field"];
	$_SESSION["form03_days"] = $_POST["employment_length"];
	$_SESSION["form03_ict_related"] = $_POST["ict_related"];

	echo "Session saved!";
}

//Self-Employed
if (isset($_POST["self_employed"])) {
	session_start();
	$_SESSION["form03_reasons"] = $_POST["reasons"];
	$_SESSION["form03_business_type"] = $_POST["business_type"];
	$_SESSION["form03_business_name"] = $_POST["business_name"];
	$_SESSION["form03_business_description"] = $_POST["business_description"];
	$_SESSION["form03_monthly_income"] = $_POST["monthly_income"];

	echo "Session saved!";
}

//Unemployed
if (isset($_POST["unemployed"])) {
	session_start();
	$_SESSION["form03_reasons"] = $_POST["reasons"];

	echo "Session saved!";
}

//Experienced Unemployed
if (isset($_POST["experienced_unemployed"])) {
	session_start();
	$_SESSION["form03_employer_name"] = $_POST["employer_name-exp"];
	$_SESSION["form03_recent_position"] = $_POST["recent_position"];
	$_SESSION["form03_reasons"] = $_POST["reasons"];

	echo "Session saved!";
}

//Get Sessions saved
if (isset($_POST["getSession"])) {
	session_start();
	$array = [
		"form01_first_name", "form01_middle_name", "form01_last_name", "form01_phone_number", "form01_email_address", "form01_address", "form01_age",
		"form01_sex", "form01_civil_status", "form01_residence", "form01_monthly_salary", "form01_graduation_year", "form01_course", "form01_organization_affiliation", "form01_academic_awards", "form01_ict_certification"
	];

	foreach ($array as $value01) {
		echo "\r\n" . $_SESSION[$value01];
	}

	echo "\r\n" . $_SESSION["form02_employment_status"];

	$employment_array = ["Employed", "Self-Employed", "Unemployed", "Experienced Unemployed"];

	if ($_SESSION["form02_employment_status"] == $employment_array[0]) {
		$employed_sessions = [
			"form03_employer_name", "form03_employer_address", "form03_position", "form03_type",
			"form03_monthly_income", "form03_field", "form03_days", "form03_ict_related"
		];
		foreach ($employed_sessions as $value02) {
			echo "\r\n" . $_SESSION[$value02];
		}
	} elseif ($_SESSION["form02_employment_status"] == $employment_array[1]) {
		$selfemployed_sessions = ["form03_reasons", "form03_business_type", "form03_business_name", "form03_business_description", "form03_monthly_income"];
		foreach ($selfemployed_sessions as $value03) {
			echo "\r\n" . $_SESSION[$value03];
		}
	} elseif ($_SESSION["form02_employment_status"] == $employment_array[2]) {
		echo "\r\n" . $_SESSION["form03_reasons"];
	} elseif ($_SESSION["form02_employment_status"] == $employment_array[3]) {
		$exp_unemployed = ["form03_employer_name", "form03_recent_position", "form03_reasons"];
		foreach ($exp_unemployed as $value04) {
			echo "\r\n" . $_SESSION[$value04];
		}
	}
}

//Submit Information saved by Sessions
if (isset($_POST["submit_session"])) {
	$result;
	$undefined = "undefined";
	try {
		require "../../includes/db_connection.inc.php";
		session_start();


		$stmt = $conn->prepare("INSERT INTO `alumni`(`first_name`, `middle_name`, `last_name`, `contact_number`, `email_address`, `address`, `age`, `sex`, `civil_status`, `residence`, `income_range`, `graduation_year`, `degree_earned`, `organizational_affiliation`, `academic_awards`, `ict_related`, `employment_type`, `alumni_profile`, `date_submitted`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now())");
		$stmt->bind_param("sssissssssssssssss", $_SESSION["form01_first_name"], $_SESSION["form01_middle_name"], $_SESSION["form01_last_name"], $_SESSION["form01_phone_number"], $_SESSION["form01_email_address"], $_SESSION["form01_address"], $_SESSION["form01_age"], $_SESSION["form01_sex"], $_SESSION["form01_civil_status"], $_SESSION["form01_residence"], $_SESSION["form01_monthly_salary"], $_SESSION["form01_graduation_year"], $_SESSION["form01_course"], $_SESSION["form01_organization_affiliation"], $_SESSION["form01_academic_awards"], $_SESSION["form01_ict_certification"], $_SESSION["form02_employment_status"], $undefined);
		$alumni_id;
		if ($stmt->execute()) {
			$alumni_id = mysqli_insert_id($conn);

			if ($_FILES['alumni_img']['error'] > 0) {
			} else {
				$file = $_FILES['alumni_img'];
				$extensions = array('jpg', 'jpeg', 'png', 'gif');
				$file_path = ua_profile($file, $alumni_id, "alumni_profile", "../../uploads/alumni_profiles/", $extensions);

				if ($file_path) {
					$stmt01 = $conn->prepare("UPDATE `alumni` SET `alumni_profile`=? WHERE _id = ?");
					$stmt01->bind_param("si", $file_path, $alumni_id);

					if ($stmt01->execute()) {
					} else {
						echo "Statement Error: 140 " . htmlspecialchars($stmt01->error);
						exit;
					}
				} else {
					echo "Path Error: 144";
					exit;
				}
			}
		} else {
			echo "Statement Error: 149 " . htmlspecialchars($stmt->error);
			exit;
		}

		$stmt->close();

		if ($_SESSION["form02_employment_status"] === "Employed") {
			$employed_sql = "INSERT INTO `employed_alumni`(`alumni_id`, `employer_name`, `employer_address`, `present_position`, `employment_type`, `monthly_salary`, `employment_field`, `employment_months`, `ict_related`) VALUES (?,?,?,?,?,?,?,?,?)";
			$employed_stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($employed_stmt, $employed_sql)) {
				echo 'Statement Error';
				exit();
			}
			mysqli_stmt_bind_param(
				$employed_stmt,
				"issssssss",
				$alumni_id,
				$_SESSION["form03_employer_name"],
				$_SESSION["form03_employer_address"],
				$_SESSION["form03_position"],
				$_SESSION["form03_type"],
				$_SESSION["form03_monthly_income"],
				$_SESSION["form03_field"],
				$_SESSION["form03_days"],
				$_SESSION["form03_ict_related"]
			);

			mysqli_stmt_execute($employed_stmt);
		} elseif ($_SESSION["form02_employment_status"] === "Self-Employed") {
			$self_employed_sql = "INSERT INTO `self_employed_alumni`(`alumni_id`, `reasons`, `business_type`, `business_name`, `business_description`, `monthly_income`) VALUES (?,?,?,?,?,?)";
			$self_employed_stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($self_employed_stmt, $self_employed_sql)) {
				echo 'Statement Error';
				exit();
			}
			mysqli_stmt_bind_param(
				$self_employed_stmt,
				"isssss",
				$alumni_id,
				$_SESSION["form03_reasons"],
				$_SESSION["form03_business_type"],
				$_SESSION["form03_business_name"],
				$_SESSION["form03_business_description"],
				$_SESSION["form03_monthly_income"]
			);

			mysqli_stmt_execute($self_employed_stmt);
		} elseif ($_SESSION["form02_employment_status"] === "Unemployed") {
			$unemployed_sql = "INSERT INTO `unemployed_alumni`(`alumni_id`, `reasons`) VALUES (?,?)";
			$unemployed_stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($unemployed_stmt, $unemployed_sql)) {
				echo 'Statement Error';
				exit();
			}
			mysqli_stmt_bind_param(
				$unemployed_stmt,
				"is",
				$alumni_id,
				$_SESSION["form03_reasons"]
			);

			mysqli_stmt_execute($unemployed_stmt);
		} elseif ($_SESSION["form02_employment_status"] === "Experienced Unemployed") {
			$experienced_unemployed_sql = "INSERT INTO `experienced_unemployed_alumni`(`alumni_id`, `recent_company`, `recent_position`, `reason`) VALUES (?,?,?,?)";
			$experienced_unemployed_stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($experienced_unemployed_stmt, $experienced_unemployed_sql)) {
				echo 'Statement Error';
				exit();
			}
			mysqli_stmt_bind_param(
				$experienced_unemployed_stmt,
				"isss",
				$alumni_id,
				$_SESSION["form03_employer_name"],
				$_SESSION["form03_recent_position"],
				$_SESSION["form03_reasons"]
			);

			mysqli_stmt_execute($experienced_unemployed_stmt);
		}

        $source = 0;
        $source_id = 0;
        $receiver = 3;
        $receiver_id = 1;
        $message = $_SESSION["form01_first_name"]. " " . $_SESSION["form01_middle_name"] . " " . $_SESSION["form01_last_name"] . " Submitted a form.";
        $sub = submit_notification($conn, $source, $source_id, $receiver, $receiver_id, $message);

		$result = true;



	} catch (Exception $e) {
		$result = false;
		echo "Error: " . $e;
	}

	if ($result) {
		echo "Information Saved!";
	}
}

function ua_profile($profile, $uid, $nfn, $path, $extensions)
{
	$file = $profile;
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	// 'jpg', 'jpeg', 'png', 'gif'
	$allowed = $extensions;

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			$NewFileName = $nfn . "_" . $uid .  "." . $fileActualExt;
			$fileDestination = $path . $NewFileName;
			move_uploaded_file($fileTmpName, $fileDestination);
			return $fileDestination;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
