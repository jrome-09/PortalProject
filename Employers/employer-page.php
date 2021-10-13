<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['emp_email'])) {
	require "style-link.html";

	$job_total = 0;
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

		//$posts =  get_postedjobs($conn, $emp['_id']);

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
						<p class="m-0 fontsize-14 font-700 text-cp2" id="posted_total"> 0 Posted Jobs</p>
					</header>
					<main class="bg-white p-4">
						<?php
						$e_id = $emp['_id'];
						$esql = "SELECT * FROM job_description WHERE employer_id = $e_id;";
						$result = $conn->query($esql);
						if (mysqli_num_rows($result) === 0) {
						?>
							<div class="p-4 text-center">
								<div class="image-container m-auto mb-2" style="height: 200px;">
									<img src="../Images/svg/undraw_Job_hunt.svg" alt="">
								</div>
								<p class="fontsize-13 color-black">You have 0 job posted <a href="#">click here to post.</a></p>
							</div>
							<?php
						} else {
							while ($row = mysqli_fetch_array($result)) {
								$job_total = $job_total+1;
								$jid = $row['_id'];
								$app_sql = "SELECT * FROM application WHERE job_id = $jid;";
								$app_result = $conn->query($app_sql);
								$count = mysqli_num_rows($app_result);

								$vr = $row['verification'];
								$class;
								if ($vr === "Unverified") {
									$class = "text-warning";
								} elseif ($vr = "Verified") {
									$class = "text-success";
								}
							?>
								<div class="border rounded bg-white p-4 mb-2">
									<div class="row">
										<div class="col-md-6">
											<h6 class="fontsize-14 color-black font-700"><?php echo $row['job_title']; ?></h6>
											<p class="fontsize-13 color-black mb-0"><?php echo $row['job_address']; ?></p>
											<p class="fontsize-13 color-black font-500"><?php echo "Salary Range: PHP " . $row['salary_range']; ?></p>
											<p class="font-super--small mb-0 tu <?php echo $class; ?>"><?php echo $vr; ?></p>
										</div>
										<div class="col-md-6 text-end">
											<p><a class="fontsize-13" href="">Applicants: <?php echo $count; ?></a></p>
											<button type="button" class="btn btn-primary fontsize-13 font-500 px-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span data-feather="edit" class="m-0"></span></button>
											<button type="button" class="btn bg-cp2 fontsize-13 font-500 px-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Request Verification"><span data-feather="check-circle" class="m-0"></span></button>
											<button type="button" class="btn btn-danger fontsize-13 font-500 px-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span data-feather="trash" class="m-0"></span></button>
										</div>
									</div>
								</div>
						<?php
							}
						}
						?>

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

			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
			var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
				return new bootstrap.Tooltip(tooltipTriggerEl)
			})

			document.getElementById('posted_total').innerHTML = "<?php echo $job_total . " Posted Job/s"?>"
			document.getElementById('dash-link').classList.add('active')
		</script>

	</body>

	</html>

<?php
} else {
	header("location: index.php");
}
?>