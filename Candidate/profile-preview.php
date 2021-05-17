
<?php
require "../html/head.html";
?>

<body>
	<div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
	<link rel="stylesheet" href="../Candidate/candidate.css">
	<?php
	require "../html/script.html";
	require "../Candidate/candidate-navigation.php"
	?>
	<main>
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
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script>
		loadPage();
		feather.replace();
	</script>
</body>

</html>