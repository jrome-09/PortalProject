<?php
require "candidate-head.html";
$submit_application = false;
?>

<body>
	<div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
	<?php
	require "../html/script.html";
	require "../includes/nav.php";
	if (!isset($_SESSION)) {
		session_start();
	}
	$college = get_college($conn, $get_uid["_id"]);
	$experience = get_experience($conn, $get_uid["_id"]);
	?>
	<main>

		<?php
		if (isset($_POST["job_id-hidden_input"])) {
			$submit_application = true;
		?>
			<script>
				console.log("<?php echo 'Job id: ' . $_POST["job_id-hidden_input"]; ?>");
				console.log("<?php echo 'Job Name: ' . $_POST["job_name-hidden_input"]; ?>");
				console.log("<?php echo 'Employer id: ' . $_POST["employer_id-hidden_input"]; ?>");
				console.log("<?php echo 'Employer name: ' . $_POST["employer_name-hidden_input"]; ?>");
			</script>
		<?php
		}
		?>
		<div class="bg-light">
			<div class="max-width-container">
				<?php
				require "Includes/preview.php";
				?>
			</div>
		</div>
	</main>
	<?php
	require "../html/footer.html";
	?>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.getElementById('jobs-link').classList.toggle('active');
		<?php 
			if (!$submit_application) {
				echo 'document.getElementById("preview_actions").classList.add("d-none")';
			}
		?>
	</script>
</body>

</html>