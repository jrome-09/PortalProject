<?php
require "alumni-head.html";
require "../html/script.html";
?>

<body class="bg-light">
	<?php
	require_once '../includes/nav.php';
	require_once '../includes/loader.php';
	?>
	<main>
		<div class="max-width-container">
			<div class="max-width-container pt-0">
				<div class="p-4 border rounded bg-white mb-2 shadow-sm">
					<p class="fontsize-13 color-black">Dear Respondent:</p>
					<p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
					<p class="fontsize-13 color-black">Thank you very much.</p>
				</div>
				<p class="text-end text-secondary mb-2 mt-4">Part 2 of ?? ...</p>
				<div class="border rounded bg-white mb-2 shadow-sm">
					<header class="px-4 py-3 fontsize-14 font-500 border-bottom">
						Part 2: Employment Status
					</header>
					<main class="p-4">
						<form action="#" id="employment_profile_form">
							<label for="employment_status" class="required color-light text-start fontsize-13 mb-2">Employment Status:</label>
							<div class="income_div mb-2">
								<!-- <input type="checkbox" name="employed_checkbox" class="btn-check" id="employed_checkbox" autocomplete="off" onclick="employmentCheckBox()">
								<label class="btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="employed_checkbox">
									Employed
								</label>
								<br>
								<input type="checkbox" name="self-employed_checkbox" class="btn-check" id="self-employed_checkbox" autocomplete="off" onclick="employmentCheckBox()">
								<label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="self-employed_checkbox">
									Self-Employed
								</label>
								<br>
								<input type="checkbox" name="unemployed_checkbox" class="btn-check" id="unemployed_checkbox" autocomplete="off" onclick="employmentCheckBox()">
								<label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="unemployed_checkbox">
									Unemployed
								</label>
								<br>
								<input type="checkbox" name="exp-unemployed_checkbox" class="btn-check" id="exp-unemployed_checkbox" autocomplete="off" onclick="employmentCheckBox()">
								<label class=" btn btn-light mb-2 color-black font-500 border fontsize-13 text-start min-width-200" for="exp-unemployed_checkbox">
									Currently Unemployed but Had Been Employed Before
								</label> -->
								<div class="form-check mb-2">
									<input class="form-check-input" onclick="radio_check('employment_status', this.name)" type="radio" name="employment_status_chk" id="radio1" value="Employed">
									<label class="form-check-label" for="radio1">
									Employed
									</label>
								</div>
								<div class="form-check mb-2">
									<input class="form-check-input" onclick="radio_check('employment_status', this.name)" type="radio" name="employment_status_chk" id="radio2" value="Self-Employed">
									<label class="form-check-label" for="radio2">
									Self-Employed
									</label>
								</div>
								<div class="form-check mb-2">
									<input class="form-check-input" onclick="radio_check('employment_status', this.name)" type="radio" name="employment_status_chk" id="radio3" value="Unemployed">
									<label class="form-check-label" for="radio3">
									Unemployed
									</label>
								</div>
								<div class="form-check mb-2">
									<input class="form-check-input" onclick="radio_check('employment_status', this.name)" type="radio" name="employment_status_chk" id="radio4" value="Currently Unemployed but had been employed before">
									<label class="form-check-label" for="radio4">
									Currently Unemployed but had been employed before
								</label> -->
									</label>
								</div>

								<input type="hidden" id="employment_status" name="employment_status">
							</div>
						</form>
					</main>
				</div>
				<div class="fontsize-13 text-danger" id="error_result"></div>
				<div class="swal2-validation-message fontsize-13 d-none mb-2 shadow-sm" id="swal2-validation-message" style="display: flex;">
					<!-- Invalid email address. -->
				</div>
				<div class="row">
					<div class="col-md-8  mt-2">
						<button class="btn bg-2 px-5 me-2">Back</button>
						<button class="btn bg-2 px-5" onclick="validate_employment_profile()">Next</button>
					</div>
				</div>

			</div>
		</div>
	</main>
	<footer>
		<div class="max-width-container text-center max-width-500px color-light">
			<div class="image-container hw-70px border bg-white rounded-circle m-auto mb-2">

			</div>
			College of Communication and Information Technology Alumni Tracer
		</div>
	</footer>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/validations.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script>
		feather.replace();
		document.title = 'CCIT Alumni Tracer'
		document.getElementById('alumni-link').classList.toggle('active');
	</script>
</body>

</html>