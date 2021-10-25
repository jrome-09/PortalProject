<?php
require "alumni-head.html";
require "../html/script.html";
session_start();

?>

<body class="bg-light">
	<?php
	require_once '../includes/nav.php';
	require_once '../includes/loader.php';
	?>
	<div class="max-width-container">
		<div class="max-width-container py-0">
			<div class="p-4 border rounded bg-white mb-2 shadow-sm">
				<p class="fontsize-13 color-black">Dear Respondent:</p>
				<p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
				<p class="fontsize-13 color-black">Thank you very much.</p>
			</div>
			<p class="text-end text-secondary mb-2 mt-4">Part 4 of 4 ...</p>
			<header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0 shadow-sm">
				Part 4: Information Review
			</header>
			<div class="p-4 border rounded-bottom bg-white mb-3 shadow-sm">
				<div class="text-center">
					<div class="image-container hw-100px border bg-white rounded m-auto">
						<img src="../Images/default_profile.png" alt="" id="alumni_upimg">
					</div>
					<label class="color-light text-start fontsize-13 mb-1 d-block text-center">Upload Your Photo</label>
					<label for="alumni_img" class="btn bg-2 px-4 mb-2 m-auto">Upload Photo</label>

				</div>
				<label class="color-light text-start fontsize-13 mb-1">Name: (LastName, FirstName, MiddleName)</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_last_name"])) {
														echo $_SESSION["form01_last_name"] . ", " . $_SESSION["form01_first_name"] . ", " . $_SESSION["form01_middle_name"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Phone/Mobile No.: (use the format: 09XX-XXX-XXX)</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_phone_number"])) {
														echo $_SESSION["form01_phone_number"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Email Address:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_email_address"])) {
														echo $_SESSION["form01_email_address"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Address:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_address"])) {
														echo $_SESSION["form01_address"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Age:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_age"])) {
														echo $_SESSION["form01_age"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Sex:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_sex"])) {
														echo $_SESSION["form01_sex"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Civil Status:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_civil_status"])) {
														echo $_SESSION["form01_civil_status"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Place of Residence:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_residence"])) {
														echo $_SESSION["form01_residence"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Family Monthly Income:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_monthly_salary"])) {
														echo $_SESSION["form01_monthly_salary"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Graduation Year:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_graduation_year"])) {
														echo $_SESSION["form01_graduation_year"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Degree earned:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_course"])) {
														echo $_SESSION["form01_course"];
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Organization Affiliation in College:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_organization_affiliation"])) {
														if (strpos($_SESSION["form01_organization_affiliation"], "/") !== false) {
															echo ltrim($_SESSION["form01_organization_affiliation"], "/");
														} else {
															echo $_SESSION["form01_organization_affiliation"];
														}
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">Academic Award(s) received:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_academic_awards"])) {
														if (strpos($_SESSION["form01_academic_awards"], "/") !== false) {
															echo ltrim($_SESSION["form01_academic_awards"], "/");
														} else {
															echo $_SESSION["form01_academic_awards"];
														}
													} ?></p>
				<label class="color-light text-start fontsize-13 mb-1">ICT Certification:</label>
				<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_ict_certification"])) {
														if (strpos($_SESSION["form01_ict_certification"], "/") !== false) {
															echo ltrim($_SESSION["form01_ict_certification"], "/");
														} else {
															echo $_SESSION["form01_ict_certification"];
														}
													} ?></p>
			</div>
			<?php if (isset($_SESSION["form02_employment_status"])) {
				if ($_SESSION["form02_employment_status"] === "Employed") {
			?>
					<header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0">
						Employment Status:
					</header>
					<div class="p-4 border rounded bg-white mb-2">
						<label class="color-light text-start fontsize-13 mb-1">Employment Status:</label>
						<p class="color-black fontsize-13"><?php echo $_SESSION["form02_employment_status"]; ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Name of Company/Employer:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_employer_name"])) {
																echo $_SESSION["form03_employer_name"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Address of Company/Employer:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_employer_address"])) {
																echo $_SESSION["form03_employer_address"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Your Present Position:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_position"])) {
																echo $_SESSION["form03_position"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Employment type:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_type"])) {
																echo $_SESSION["form03_type"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Monthly Salary:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_monthly_income"])) {
																echo $_SESSION["form03_monthly_income"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Field of Employment:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_field"])) {
																echo $_SESSION["form03_field"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Months of Employment:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_days"])) {
																echo $_SESSION["form03_days"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">ICT Related Job:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_ict_related"])) {
																echo $_SESSION["form03_ict_related"];
															} ?></p>
					</div>
				<?php
				} elseif ($_SESSION["form02_employment_status"] === "Self-Employed") { ?>
					<header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0">
						Employment Status:
					</header>
					<div class="p-4 border rounded bg-white mb-2">
						<label class="color-light text-start fontsize-13 mb-1">Employment Status:</label>
						<p class="color-black fontsize-13"><?php echo $_SESSION["form02_employment_status"]; ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Reasons for being Unemployed:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_reasons"])) {
																if (strpos($_SESSION["form03_reasons"], "/") !== false) {
																	echo ltrim($_SESSION["form03_reasons"], "/");
																} else {
																	echo $_SESSION["form03_reasons"];
																}
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Work/Business Type:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_business_type"])) {
																echo $_SESSION["form03_business_type"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Name of your Company/Work:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_business_name"])) {
																echo $_SESSION["form03_business_name"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Work Description:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_business_description"])) {
																echo $_SESSION["form03_business_description"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Monthly Income:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_monthly_income"])) {
																echo $_SESSION["form03_monthly_income"];
															} ?></p>
					</div>
				<?php
				} elseif ($_SESSION["form02_employment_status"] === "Unemployed") { ?>
					<header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0">
						Employment Status:
					</header>
					<div class="p-4 border rounded bg-white mb-2">
						<label class="color-light text-start fontsize-13 mb-1">Employment Status:</label>
						<p class="color-black fontsize-13"><?php echo $_SESSION["form02_employment_status"]; ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Reasons for being Unemployed:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_reasons"])) {
																if (strpos($_SESSION["form03_reasons"], "/") !== false) {
																	echo ltrim($_SESSION["form03_reasons"], "/");
																} else {
																	echo $_SESSION["form03_reasons"];
																}
															} ?></p>
					</div>
				<?php
				} elseif ($_SESSION["form02_employment_status"] === "Experienced Unemployed") { ?>
					<header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0">
						Employment Status:
					</header>
					<div class="p-4 border rounded bg-white mb-2">
						<label class="color-light text-start fontsize-13 mb-1">Employment Status:</label>
						<p class="color-black fontsize-13">Experienced Unemployed</p>
						<label class="color-light text-start fontsize-13 mb-1">Name of the Company where you recently worked for:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_employer_name"])) {
																echo $_SESSION["form03_employer_name"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Recent Position:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_recent_position"])) {
																echo $_SESSION["form03_recent_position"];
															} ?></p>
						<label class="color-light text-start fontsize-13 mb-1">Reasons for leaving your recent work:</label>
						<p class="color-black fontsize-13"><?php if (isset($_SESSION["form03_reasons"])) {
																if (strpos($_SESSION["form03_reasons"], "/") !== false) {
																	echo ltrim($_SESSION["form03_reasons"], "/");
																} else {
																	echo $_SESSION["form03_reasons"];
																}
															} ?></p>
					</div>
			<?php
				}
			} ?>

			<button class="btn bg-2 px-5 me-2">Back</button>
			<button type="button" class="btn bg-2 px-5" onclick="submit_session()">Submit</button>

			<p class="color-light fontsize-13 mt-2">Make sure all inputted information is correct before submiting the form.</p>
		</div>
	</div>
	<footer>
		<div class="max-width-container text-center max-width-500px color-light">
			<div class="image-container hw-70px border bg-white rounded-circle m-auto mb-2">

			</div>
			College of Communication and Information Technology Alumni Tracer
		</div>
	</footer>
	<form action="#" id="sessionsubmit_form">
		<input type="hidden" name="submit_session">
		<input type="file" name="alumni_img" id="alumni_img" class="d-none" onchange="readUpload02(this, '#alumni_upimg')">
	</form>
	<script>
	</script>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script src="../javascript/validations.js"></script>
	<script>
		feather.replace();
		document.title = 'CCIT Alumni Tracer'
		document.getElementById('alumni-link').classList.toggle('active');
		document.getElementById("alumni_img").value = null
	</script>
</body>

</html>