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
	session_start();
	if (isset($_SESSION["username"])) {
		require "../Candidate/candidate-navigation.php";
	} else {
		require "../includes/nav.inc.php";
	}

	$_id = $_POST["job_input"];
	$_id_explode = explode("_", $_id)[1];

	require "../includes/db_connection.inc.php";
	$sql = "SELECT `_id`, `employer_id`, `employer_name`, `job_title`, `monthly_salary`, `job_address`, `date_posted`, `job_highlights`, `job_requirements`, `job_responsibilities`, `career_level`, `job_type`, `qualification`, `job_specialization`, `additional_details`, `verification` FROM `job_description` WHERE _id = $_id_explode";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$highlights = explode("/", $row["job_highlights"]);
	$requirements = explode("/", $row["job_requirements"]);
	$responsibilities = explode("/", $row["job_responsibilities"]);
	?>
	<main>
		<div class="bg-light pt-5">
			<div class="max-width-container">
				<div class=" p-5 bg-white rounded border mb-2">
					<div class="row">
						<div class="col-lg-9">
							<div class="image-container rounded border bg-light mb-2" style="height: 70px; width: 70px;"></div>
							<h5 class="color-black mb-0"><?php echo $row["job_title"]; ?></h5>
							<p class="color-black fontsize-14"><?php echo $row["employer_name"]; ?></p>
							<p class="color-light fontsize-14 m-0">Salary: PHP <?php echo $row["monthly_salary"]; ?> Monthly</p>
							<p class="color-light fontsize-14 m-0">Address: <?php echo $row["job_address"]; ?></p>
							<p class="color-light fontsize-14">Date Posted: <?php echo $row["date_posted"]; ?></p>
						</div>
						<div class="col-lg-3 d-flex flex-column justify-content-center ">
							<!-- onclick="submit_job_id()" -->
							<a href="#" id="apply_btn" type="button" <?php if (isset($_SESSION["username"])) {
																			echo "onclick = submit_job_id()";
																		} else {
																			echo "onclick = show_toast_swal()";
																		} ?> class="btn btn-primary my-2 font-500 fontsize-14 shadow-sm-hover d-block">Apply now</a>
							<form action="../Candidate/profile-preview.php" method="post" id="hidden_job_id">
								<input type="hidden" value="<?php echo $_id_explode; ?>" name="job_id-hidden_input">
								<input type="hidden" value="<?php echo $row["job_title"]; ?>" name="job_name-hidden_input">
								<input type="hidden" value="<?php echo $row["employer_id"]; ?>" name="employer_id-hidden_input">
								<input type="hidden" value="<?php echo $row["employer_name"]; ?>" name="employer_name-hidden_input">
							</form>
							<div <?php if (isset($_SESSION["username"])) {
										
									} else {
										echo "onclick = show_toast_swal()";
									} ?> class="btn btn-light border my-2 fontsize-14 color-black shadow-sm-hover hover-text-primary hover-text-feather"><span data-feather="bookmark"></span> Add to Bookmarks</div>

						</div>
					</div>
				</div>
				<div class=" p-5 bg-white border rounded">
					<p class="fontsize-14 font-400 color-black">Job Highlights</p>
					<ol class="mb-5">

						<?php
						for ($i = 0; $i < count($highlights); $i++) {
						?>
							<li class="bullets fontsize-13 color-black mb-1"><?php echo $highlights[$i]; ?></li>
						<?php
						}
						?>

					</ol>
					<p class="font-400 fontsize-14 color-black">Job Details</p>
					<p class="font-500 fontsize-14 color-black">Job Requirements:</p>
					<ol>
						<?php
						for ($i = 0; $i < count($highlights); $i++) {
						?>
							<li class="bullets fontsize-13 color-black mb-1"><?php echo $requirements[$i]; ?></li>
						<?php
						}
						?>
						<!-- <li class="bullets fontsize-13 color-black mb-1">Fluent in scripting HTML, CSS and JavaScript.</li>
						<li class="bullets fontsize-13 color-black mb-1">Fluent in MS SQL database and SQL syntax.</li>
						<li class="bullets fontsize-13 color-black mb-1">Fluent in relevant development software, particularly, Visual Studio, MS SQL.</li>
						<li class="bullets fontsize-13 color-black mb-1">Experience applying theories related to web, database, interactive and mobile application.</li>
						<li class="bullets fontsize-13 color-black mb-1">Understanding of basic designing tools such as Photoshop and Illustrator.</li>
						<li class="bullets fontsize-13 color-black mb-1">Good communication skills.</li>
						<li class="bullets fontsize-13 color-black mb-1">Ability to manage multiple timelines.</li>
						<li class="bullets fontsize-13 color-black mb-1">Highly creative in thinking, concepts and designs.</li>
						<li class="bullets fontsize-13 color-black mb-1">No specific paper qualification is required; anyone with the passion and the above requirement may apply.</li> -->

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

						<!-- <li class="bullets fontsize-13 color-black mb-1">Work collaboratively to create design & development concepts.</li>
						<li class="bullets fontsize-13 color-black mb-1">Collaborate with internal departments to ensure your development are consistent with corporate guidelines.</li>
						<li class="bullets fontsize-13 color-black mb-1">Translate concepts into actual implementation with a focus on usability and speed.</li>
						<li class="bullets fontsize-13 color-black mb-1">Handle all software and web development work.</li>
						<li class="bullets fontsize-13 color-black mb-1">Manage and meet project deadline</li> -->
					</ol>
					<p class="font-500 fontsize-14">Additional Information</p>
					<p class="fontsize-13 colorblack"><?php echo $row["additional_details"]; ?></p>
					<div class="row">
						<div class="col-md-6">
							<p class="fontsize-14 font-500 color-black m-0">Career Level</p>
							<p class="fontsize-13 color-black"><?php echo $row["career_level"]; ?></p>
							<p class="fontsize-14 font-500 color-black m-0">Job Type</p>
							<p class="fontsize-13 color-black"><?php echo $row["job_type"]; ?></p>
						</div>
						<div class="col-md-6">
							<p class="fontsize-14 font-500 color-black m-0">Qualification</p>
							<p class="fontsize-13 color-black"><?php echo $row["qualification"]; ?></p>
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
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script>
		loadPage();

		<?php
		if (isset($_SESSION["username"])) {
		?>
			document.getElementById('jobs-link').classList.toggle('active');

		<?php
		} else {
		?>
			document.getElementById('nav-stylesheet').href = "../css/index-nav.css"
			document.getElementById('web-id').href = "../index.php"
			document.getElementById('index-link').href = "../index.php"
			document.getElementById('about-link').href = "../about.php"
			document.getElementById('contacts-link').href = "../contacts.php"
			document.getElementById('alumni-link').href = "../Alumni/alumni-index.php"
			document.getElementById('emp-profiles-link').href = "../Employers/employers-profile-page.php"
			document.getElementById('jobs-link-out').href = "../Jobs/jobs.php"
			document.getElementById('forum-link').href = "../Forum/forum-index.php"
			document.getElementById('signup-btn').href = "../signup-form.php"
			document.getElementById('login-btn').href = "../candidate-login-form.php"
			document.getElementById('for_emp').href = "../Employers/index.php"
		<?php
		}
		?>
		feather.replace();
		document.title = "CCIT | Job Details";
		console.log("<?php echo $_id; ?>");
		// changeLink_inner();

		function submit_job_id() {
			form = document.getElementById("hidden_job_id");
			form.submit();
		}
	</script>
</body>

</html>