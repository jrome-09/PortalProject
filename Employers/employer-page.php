<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['emp_email'])) {
	require "style-link.html";
?>

	<body>
		<!-- <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
			<div class="spinner-border text-primary" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div> -->
		<?php
		require "../html/script.html";
		require "includes/logged-emp-nav.inc.php";
		?>
		<main>
			
		</main>
		<?php
		require "../html/footer.html";
		?>
		<script src="../javascript/functions.js"></script>
		<script src="../javascript/scroll.js"></script>
		<script src="../javascript/onclick.js"></script>
		<script>
			loadPage();
			feather.replace();
		</script>

	</body>

	</html>

<?php
} else {
	header("location: index.php");
}
?>