<?php
require "alumni-head.html";
require "../html/script.html";
session_start();

?>

<body class="bg-light">
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="../css/global.css">
	<div class="max-width-container mx-900px p-2">
		<div class="p-4 border rounded bg-white mb-2">
			<p class="fontsize-13 color-black">Dear Respondent:</p>
			<p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
			<p class="fontsize-13 color-black">Thank you very much.</p>
		</div>
		<header class="px-4 py-3 fontsize-14 font-500 border rounded-top bg-white border-bottom-0">
			Part 4: Information Review
		</header>
		<div class="p-4 border rounded bg-white mb-2">
			<label class="color-light text-start fontsize-13 mb-1">Name: (LastName, FirstName, MiddleName)</label>
			<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_full_name"])) {
													echo $_SESSION["form01_full_name"];
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
													echo $_SESSION["form01_organization_affiliation"];
												} ?></p>
			<label class="color-light text-start fontsize-13 mb-1">Academic Award(s) received:</label>
			<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_academic_awards"])) {
													echo $_SESSION["form01_academic_awards"];
												} ?></p>
			<label class="color-light text-start fontsize-13 mb-1">ICT Certification:</label>
			<p class="color-black fontsize-13"><?php if (isset($_SESSION["form01_ict_certification"])) {
													echo $_SESSION["form01_ict_certification"];
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
															echo $_SESSION["form03_reasons"];
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
															echo $_SESSION["form03_reasons"];
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
															echo $_SESSION["form03_reasons"];
														} ?></p>
				</div>
		<?php
			}
		} ?>
		<div class="row">
			<div class="col-md-8  mt-2">
				<button class="btn btn-primary fontsize-13 font-500 px-5 me-2">Back</button>
				<button type="button" class="btn btn-primary fontsize-13 font-500 px-5" onclick="submit_session()">Submit</button>
			</div>
			<div class="col-md-4 py-3 d-flex align-content-center">
				<div class="progress w-100">
					<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="fontsize-13 w-100 px-2" style="max-width: 100px; min-width: 100px;">
					Page 7 of 7
				</div>
			</div>
		</div>
		<p class="color-light fontsize-13">Make sure all inputted information is correct before submiting the form.</p>
	</div>
	<footer>
		<div class="max-width-container text-center max-width-500px color-light">
			College of Communication and Information Technology Alumni Tracer
		</div>
	</footer>
	<form action="#" id="sessionsubmit_form">
		<input type="hidden" name="submit_session">
	</form>
	<script>
	</script>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script src="../javascript/validations.js"></script>
</body>

</html>