<?php
require "candidate-head.html";
?>

<body>
	<div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
	<?php
	require "../html/script.html";
	require "../Candidate/candidate-navigation.php"
	?>
	<main>

		<?php
		if (isset($_POST["job_id-hidden_input"])) {
		?>
		<script>
			console.log("<?php echo 'Job id: ' . $_POST["job_id-hidden_input"];?>");
			console.log("<?php echo 'Job Name: ' . $_POST["job_name-hidden_input"];?>");
			console.log("<?php echo 'Employer id: ' . $_POST["employer_id-hidden_input"];?>");
			console.log("<?php echo 'Employer name: ' . $_POST["employer_name-hidden_input"];?>");
		</script>
		<?php
		}
		?>
		<div class="bg-light pt-5">
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
	<script>
		loadPage();
		feather.replace();
	</script>
</body>

</html>