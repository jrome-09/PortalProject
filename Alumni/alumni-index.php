<?php
require "alumni-head.html";
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
	?>

	<main class="bg-light">
		<div class="max-width-container">
			<div class="card p-4 shadow-sm mb-2"></div>
			<div class="border rounded p-4 shadow-sm bg-white">
				<div class="max-width-container">
					<div class="image-container mb-4" style="height: 100px;">
						<img src="../images/svg/undraw_no_data.svg" alt="">
					</div>
					<p class="text-center">No Data Found</p>
				</div>
			</div>
		</div>
	</main>
	<?php
	require_once "../html/footer.html";
	?>

	<script src="../javascript/functions.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script src="../javascript/validations.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.title = "CCIT | Alumni"
		document.getElementById('alumni-link').classList.toggle('active');
	</script>
</body>

</html>