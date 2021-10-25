<?php
require "candidate-head.html";
$application_count = 0;
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
	<main>
		<div class="bg-light">
			<div class="max-width-container">
				<div class="bg-white border rounded px-4 py-3 mb-2">
					<p class="m-0 fontsize-14 font-500 color-black" id="application_count">All Applications ()</p>
				</div>
				<div class="border rounded p-4 bg-white">
					<?php
					if ($get_uid) {
						$id = $get_uid['_id'];
						$sql = "SELECT * FROM `application` WHERE applicant_id = $id";
						$result = $conn->query($sql);
						if (mysqli_num_rows($result) === 0) {
					?>
							<div class="hw-100pcent text-center p-4">
								<div class="image-container hw-100pcent mb-2" style="height: 200px; max-height: 200px;">
									<img src="../Images/svg/undraw_empty.svg" alt="" style="filter: opacity(90%); height: 100%;">
								</div>
								<div style="max-width: 220px;" class="text-center m-auto mt-2">
									<p class="fontsize-13 color-black">You have 0 application sent. <a href="#">Apply a job now</a></p>
								</div>
							</div>
						<?php
						} else {
						?>
							<div class="row">
								<?php
								while ($row = mysqli_fetch_array($result)) {
									$job = get_job($conn, $row['job_id']);
									$eid = $row['employer_id'];
									$data = get_emp($conn, $eid);
									//echo "<script>console.log('" . $row['employer_id'] . "')</script>";
									$application_count = $application_count  + 1;
									$class = ['text-success', 'text-danger', 'text-warning'];
									$text = ['Your Application has been approved by the Employer.', 'Your Application has been declined by the employer.', 'Your Application has been sent. Please wait for the result.'];
									$status;
									$text_result;
									$feather;
									if ($row['application_status'] === 'Under Review') {
										$status = $class[2];
										$text_result = $text[2];
										$feather = 'more-horizontal';
									} elseif ($row['application_status'] === 'Declined') {
										$status = $class[1];
										$text_result = $text[1];
										$feather = 'alert-circle';
									} elseif ($row['application_status'] === 'Approved') {
										$status = $class[0];
										$text_result = $text[0];
										$feather = "check";
									} else {
										$status = 'color-black';
										$text_result = "Something went wrong!";
									}
								?>
									<div class="col-md-6">
										<div class="border p-4 rounded bg-white mb-4">
											<div class="d-flex">
												<div class="flex-fill">
													<div class="d-flex align-items-center " id="image-title">
														<div class="image-container border align-self-start rounded bg-light hw-50px me-3 mb-2">
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
														<div class="mb-2">
															<a href="#" class="fontsize-14 text-primary font-700 m-0" id="btn-job0_<?php echo $row["job_id"] ?>" onclick="job_submit(this.id)"><?php echo $row['job_title'] ?></a>
															<p class="fontsize-14 color-black m-0"><?php echo $row['employer_name'] ?></p>
															<p class="rounded-pill bg-light <?php echo $status; ?> font-super--small font-500 p-1 px-2 border"><span data-feather="<?php echo $feather;?>"></span><?php echo $text_result; ?></p>
														</div>
													</div>
												</div>
												<div class="position-relative">
													<div class="image-container hover-text-feather border rounded-circle bg-light" id="<?php echo $row['_id'] ?>" onclick="show_option(this.id)" style="height: 30px; width: 30px;">
														<span data-feather="chevron-down" class="m-0"></span>
													</div>
													<div class="position-absolute bg-light border rounded shadow-sm p-2 application_option" id="application_option0<?php echo $row['_id']; ?>" style="width: 200px; top: 2rem; right: 0;">
														<button class="border color-black text-start fontsize-13 btn btn-white d-block width-100 btn-hover-primary mb-1" id="<?php echo 'view-btn_' . $row['_id'] ?>" onclick="view_application(this.id)">View Application</button>
														<button class="border color-black text-start fontsize-13 btn btn-white d-block width-100 btn-hover-primary" onclick="withdraw_alert()">Withdraw Application</button>
													</div>
												</div>
											</div>
											<div class="text-end">
												<p class="font-super--small color-black m-0">Date Submitted: <?php echo $row['date_created']; ?></p>
											</div>
										</div>
									</div>
								<?php
								}
								?>
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
	<script src="../javascript/validations.js"></script>
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.title = "Candidate | Job Applications";
		//GetSpecializationList_inner();
		function withdraw_alert() {
			const title = 'Are you sure?'
			const text = 'Your application will be withdrawn and will notify the employer.'
			const icon = 'warning'
			const cancel = true
			const confirmbtn_text = 'Yes! Withdraw Applcation'
			const confirmed_title = 'Success!'
			const confirmed_text = 'Your application has been withdrawn.'
			const confirmed_icon = 'success'
			show_alert_options(title, text, icon, cancel, confirmbtn_text, confirmed_title, confirmed_text, confirmed_icon);
		}
		document.getElementById('application_count').innerHTML = 'All Applications (<?php echo $application_count ?>)'

		function view_application(_id) {
			window.location.href = 'profile-preview.php'
			console.log(_id);
		}
		document.getElementById('job-app-link').classList.add('active')
	</script>
</body>

</html>