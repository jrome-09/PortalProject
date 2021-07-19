<?php
require "alumni-head.html";
require "../html/script.html";
?>

<body class="background-thicker-light">
	<main>
		<div class="max-width-container mx-900px p-2">
			<div class="p-4 border rounded bg-white mb-2">
				<p class="fontsize-13 color-black">Dear Respondent:</p>
				<p class="fontsize-13 color-black">We are conducting a tracer study of ICT graduates of the University of Northern Philippines. Your response to this survey will help us complete this undertaking. We assure you that all data you will provide shall be treated with utmost respect and confidentiality </p>
				<p class="fontsize-13 color-black">Thank you very much.</p>
			</div>

			<div class="border rounded bg-white mb-2">
				<header class="px-4 py-3 fontsize-14 font-500 border-bottom">
					Part 2: Employment Profile
				</header>
				<main class="p-4">
					<form action="#" id="employment_profile_form">
						<label for="employment_status" class="required color-light text-start fontsize-14 mb-1">Employment Type:</label>
						<div class="income_div mb-2">
							<input type="checkbox" name="employed_checkbox" class="btn-check" id="employed_checkbox" autocomplete="off" onclick="employmentCheckBox()">
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
							</label>

							<input type="hidden" id="employment_status" name="employment_status">
						</div>
					</form>
				</main>
			</div>
			<div class="fontsize-13 text-danger" id="error_result"></div>
			<div class="row">
				<div class="col-md-8  mt-2">
					<button class="btn btn-primary fontsize-13 font-500 px-5 me-2">Back</button>
					<button class="btn btn-primary fontsize-13 font-500 px-5" onclick="validate_employment_profile()">Next</button>
				</div>
				<div class="col-md-4 py-3 d-flex align-content-center">

					<div class="progress w-100">
						<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="fontsize-13 w-100 px-2" style="max-width: 100px; min-width: 100px;">
						Page 2 of ??
					</div>

				</div>
			</div>

		</div>
	</main>
	<footer>
		<div class="max-width-container text-center max-width-500px color-light">
			College of Communication and Information Technology Alumni Tracer
		</div>
	</footer>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/validations.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
</body>

</html>