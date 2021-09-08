<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['emp_email'])) {
	require "style-link.html";
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
		?>
		<main class="bg-light">
			<div class="max-width-container">
				<div class="border overflow-hidden bg-white p-4 rounded mb-5 blp2 shadow-sm d-flex justify-content-between align-items-center">
					<div>
						<h6 class="text-warning font-700"><?php echo $cname; ?></h6>
						<p class="fontsize-13 color-black m-0"><span data-feather="map-pin"></span> <?php echo $caddress ?></p>
					</div>
					<div class="">
						<a href="form.php" class="btn bg-cp2 fontsize-13 font-500"><span data-feather="plus" class="text-white"></span> Post a Job</a>
					</div>
				</div>
				<div class="bg-white overflow-hidden border rounded shadow-sm">
					<header class="bg-light p-4 border-bottom">
						<p class="m-0 fontsize-14 font-700 text-cp2"> 0 Posted Jobs</p>
					</header>
					<main class="bg-white p-4">
						<div class="p-4 text-center">
							<div class="image-container m-auto mb-2" style="height: 200px;">
								<img src="../Images/svg/undraw_Job_hunt.svg" alt="">
							</div>
							<p class="fontsize-13 color-black">You have 0 job posted <a href="#">click here to post.</a></p>
						</div>
					</main>
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
			document.getElementById('web-id').href = "../index.php"
			document.getElementById('index-link').href = "../index.php"
			var parent = document.getElementById('mypage-link').parentElement
			parent.classList.add('active');
		</script>

	</body>

	</html>

<?php
} else {
	header("location: index.php");
}
?>