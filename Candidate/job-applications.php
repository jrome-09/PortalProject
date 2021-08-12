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
	require "candidate-navigation.php"
	?>
	<main>
		<div class="background-thicker-light position-relative">
			<div class="bg-image position-absolute top-0 left-0"></div>
			<div class="max-width-container pb-3 mt-5">
				<?php
				require "../html/search-form.html";
				?>
			</div>
		</div>
		<div class="bg-light">
			<div class="max-width-container">
				<div class="bg-white border rounded px-4 py-3 mb-2">
					<p class="color-black fontsize-14 m-0">All Applications (0)</p>
				</div>
				<div class="row" id="application-row-container">
					<?php
					require "../includes/db_connection.inc.php";
					require "../includes/functions.inc.php";
					if (!isset($_SESSION)) {
						session_start();
					}
					$get_uid = uidExists($conn, $_SESSION["uemail"]);
					//echo "<script>console.log(" . $get_uid['_id'] . ")</script>";
					if ($get_uid) {
						$id = $get_uid['_id'];
						$sql = "SELECT * FROM `application` WHERE applicant_id = $id";
						$result = $conn->query($sql);
						while ($row = $result->fetch_assoc()) {
							// echo "<script>console.log('" . $row['applicant_name'] . "')</script>";
					?>
							<div class="col-md-6 p-1" id="application<?php echo $row['_id']; ?>">
								<div class="bg-white rounded border p-4 shadow-sm-hover">
									<div class="row">
										<div class="col-lg-2">
											<div class="d-flex justify-content-start align-items-center">
												<div class="image-container border rounded background-thicker-light mb-2 d-block" style="height: 70px; width: 70px; min-width: 70px;">

												</div>
											</div>
										</div>
										<div class="col-lg-10">

											<div class="btn-group float-end">
												<button type="button" class="btn p-1 border-1 rounded-circle hover-text-primary hover-text-feather" data-bs-toggle="dropdown"><span data-feather="chevron-down" style="height: 22px; width: 22px;"></span></button>
												<ul class="dropdown-menu mt-1 p-2">
													<li><a href="#" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">View Submitted Profile</a></li>
													<li><a href="#" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">Withdraw Application</a></li>
												</ul>
											</div>

											<a href="#" id="btn-job_<?php echo $row['job_id'] ?>" onclick="job_submit(this.id)">
												<h6 class="mb-0"><?php echo $row['job_title']; ?></h6>
											</a>
											<p class="color-black fontsize-14">Employer: <?php echo $row['employer_name'] ?></p>
											<p class="color-light fontsize-14 mb-0">Application Received (<?php echo $row['date_created'] ?>)</p>
											<div class="background-thicker-light d-inline-block px-2 rounded-pill mb-4">
												<p class="m-0 fontsize-13 color-light">Employer is reviewing your application</p>
											</div>
											<p class="font-super--small color-light text-end m-0">Applied on: <?php echo " " . $row['date_created'] ?></p>
										</div>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<form action="../Jobs/job-details.php" id="job_form_submit" method="post">
			<input type="hidden" id="form_job_input" name="job_input">
		</form>
	</main>
	<?php
	require "../html/footer.html";
	?>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.title = "Candidate | Job Applications";
		GetSpecializationList_inner();
	</script>
</body>

</html>