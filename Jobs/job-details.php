<?php
require "job-head.html";
?>

<body>
	<div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
	<?php
	require "../html/script.html";
	if (!isset($_SESSION)) {
		session_start();
	}
	require "../includes/nav.php";
	$_id = $_POST["job_input"];
	$_id_explode = explode("_", $_id)[1];
	$sql = "SELECT * FROM `job_description` WHERE _id = $_id_explode";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$requirements = explode("/", $row["job_requirements"]);
	$responsibilities = explode("/", $row["job_responsibilities"]);
	if (isset($_SESSION['username'])) {
		$uid = uidExists($conn, $_SESSION["uemail"]);
		$application = get_application($conn, $uid['_id'], $_id_explode);
	}

	$eid = $row['employer_id'];
	$data = get_emp($conn, $eid);
	
	?>
	<main>
		<div class="bg-light">
			<div class="max-width-container">
				<div class=" p-5 bg-white rounded border mb-2">
					<div class="row">
						<div class="col-lg-9">
							<div class="image-container rounded border bg-light mb-2" style="height: 70px; width: 70px;">
								<img src="<?php if ($data['company_logo'] != "") {
												if (file_exists($data['company_logo'])) {
													echo $data['company_logo'];
												} else {
													$dt = $data['company_logo'];
													echo str_replace("../", "", $dt);
												}
											} else {
											}  ?>" alt="#">
							</div>
							<h5 class="color-black mb-0"><?php echo $row["job_title"]; ?></h5>
							<p class="color-black fontsize-13"><?php echo $row["employer_name"]; ?></p>
							<p class="color-light fontsize-13 m-0">Salary: PHP <?php echo $row["salary_range"]; ?></p>
							<p class="color-light fontsize-13 m-0">Address: <?php echo $row["job_address"]; ?></p>
							<p class="color-light fontsize-13">Date Posted: <?php echo $row["date_posted"]; ?></p>
						</div>

						<?php if (isset($_SESSION['username'])) {
							if (!$application) {
						?>
								<div class="col-lg-3 d-flex flex-column justify-content-center ">
									<a href="#" id="apply_btn" type="button" <?php if (isset($_SESSION["username"])) {
																					echo "onclick = submit_job_id()";
																				} ?> class="btn bg-cp2 bg-cp2h my-2 font-500 fontsize-14 shadow-sm-hover d-block"><span data-feather="send" class="text-white me-2"></span> Apply now</a>
									<form action="../Candidate/profile-preview.php" method="post" id="hidden_job_id">
										<input type="hidden" value="<?php echo $_id_explode; ?>" name="job_id-hidden_input">
										<input type="hidden" value="<?php echo $row["job_title"]; ?>" name="job_name-hidden_input">
										<input type="hidden" value="<?php echo $row["employer_id"]; ?>" name="employer_id-hidden_input">
										<input type="hidden" value="<?php echo $row["employer_name"]; ?>" name="employer_name-hidden_input">
										<input type="hidden" value="submit" name="preview_type">
									</form>
									<div class="btn btn-light border my-2 fontsize-13 font-500 color-black htl-cp2cb htfthr shadow-sm-hover"><span data-feather="bookmark"></span> Add to Bookmarks</div>
								</div>
							<?php
							} else {
							?>
								<div class="col-lg-3 d-flex flex-column justify-content-center ">
									<div class="btn bg-cp2 text-white fontsize-13 font-500"><span data-feather="check-circle" class="text-white me-2"></span> Application Submitted</div>
								</div>
							<?php
							}
						} else {
							?>
							<div class="col-lg-3 d-flex flex-column justify-content-center ">
								<a href="#" id="apply_btn" type="button" onclick=show_toast_swal() class="btn bg-cp2 bg-cp2h my-2 font-500 fontsize-13 font-500 shadow-sm-hover d-block"><span data-feather="send" class="text-white me-2"></span>Apply now</a>
								<div onclick=show_toast_swal() class="btn btn-light htl-cp2cb htfthr border my-2 fontsize-13 font-500 color-black shadow-sm-hover hover-text-primary hover-text-feather"><span data-feather="bookmark"></span> Add to Bookmarks</div>
							</div>
						<?php
						}
						?>


					</div>
				</div>
				<div class=" p-5 bg-white border rounded">
					<!-- <p class="fontsize-14 font-400 color-black">Job Highlights</p>
					<ol class="mb-5">

						<?php
						for ($i = 0; $i < count($highlights); $i++) {
						?>
							<li class="bullets fontsize-13 color-black mb-1"><?php //echo $highlights[$i]; 
																				?></li>
						<?php
						}
						?>

					</ol> -->
					<p class="font-400 fontsize-14 color-black">Job Details</p>
					<p class="font-500 fontsize-14 color-black">Job Requirements:</p>
					<ol>
						<?php
						for ($i = 0; $i < count($requirements); $i++) {
						?>
							<li class="bullets fontsize-13 color-black mb-1"><?php echo $requirements[$i]; ?></li>
						<?php
						}
						?>
					</ol>
					<p class="font-500 fontsize-14 color-black">Job Responsibilities/Duties:</p>
					<ol class="mb-5">
						<?php
						for ($i = 0; $i < count($responsibilities); $i++) {
						?>
							<li class="bullets fontsize-13 color-black mb-1"><?php echo $responsibilities[$i]; ?></li>
						<?php
						}
						?>
					</ol>
					<p class="font-500 fontsize-14">Job Description</p>
					<p class="fontsize-13 colorblack"><?php echo $row["job_info"]; ?></p>
					<div class="row">
						<div class="col-md-6">
							<p class="fontsize-14 font-500 color-black m-0">Career Level</p>
							<p class="fontsize-13 color-black"><?php echo $row["career_level"]; ?></p>
							<p class="fontsize-14 font-500 color-black m-0">Job Type</p>
							<p class="fontsize-13 color-black"><?php echo $row["job_type"]; ?></p>
						</div>
						<div class="col-md-6">
							<p class="fontsize-14 font-500 color-black m-0">Qualification</p>
							<p class="fontsize-13 color-black"><?php echo $row["job_qualifications"]; ?></p>
							<p class="fontsize-14 font-500 color-black m-0">Job Specializations</p>
							<p class="fontsize-13 color-black"><?php echo $row["job_specialization"]; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php
	require "../html/footer.html";
	?>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script src="../javascript/validations.js"></script>
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.title = "CCIT | Job Details";
		console.log("<?php echo $_id; ?>");

		function submit_job_id() {
			form = document.getElementById("hidden_job_id");
			form.submit();
		}
		var parent = document.getElementById('jobs-link-nav').parentElement
		parent.classList.add('active');
		document.getElementById('jobs-link').classList.add('active')
	</script>
</body>

</html>