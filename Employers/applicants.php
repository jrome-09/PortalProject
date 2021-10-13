<?php
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
	require "../includes/nav.php";
	?>

	<main class="background-thicker-light">
		<div class="max-width-container">
			<div class="border rounded bg-white p-4 mb-2">
				<p class="m-0 fontsize-14 font-700 text-cp2" id="posted_total"> 0 Applicants</p>
			</div>
			<div class="border rounded bg-white p-4">
				<?php
				$e_id = $emp['_id'];
				$esql = "SELECT * FROM job_description WHERE employer_id = $e_id;";
				$result = $conn->query($esql);
				if (mysqli_num_rows($result) === 0) {
				} else {
					while ($row = mysqli_fetch_array($result)) {
						$jid = $row['_id'];
						$app_sql = "SELECT * FROM application WHERE job_id = $jid;";
						$app_result = $conn->query($app_sql);

						if (mysqli_num_rows($app_result) === 0) {

				?>
							<p class="font-700 color-black fontsizr-13 p-2 rounded-top border-bottom-0 m-0 bg-light border"><?php echo $row['job_title']; ?></p>
							<div class="bg-white border rounded-bottom mb-5 p-4">
								<div class="image-container hw-100px m-auto mb-2 overflow-visible">
									<img src="../Images/svg/undraw_no_data.svg" alt="#">
								</div>
								<p class="fontsize-13 color-light font-500 text-center m-0">You have 0 applicant on this job.</p>
							</div>
						<?php
						} else {
						?>
							<p class="font-700 color-black fontsizr-13 p-2 rounded-top border-bottom-0 m-0 bg-light border"><?php echo $row['job_title']; ?></p>
							<div class="bg-white border rounded-bottom mb-5">
								<table class="table fontsize-13 color-black mb-5">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Middle Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Contact Number</th>
											<th scope="col">Email Address</th>

											<th scope="col">Date Applied</th>
											<th scope="col">Status</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$num = 0;
										while ($ab = mysqli_fetch_array($app_result)) {
											$a_id = $ab['applicant_id'];
											$a_gidsql = "SELECT * FROM jobseeker WHERE _id = $a_id;";
											$gidsql_result = $conn->query($a_gidsql);
											$a_array = mysqli_fetch_array($gidsql_result);
											$num = $num + 1;

											$status = $ab['application_status'];

											if ($status === 'Under Review') {
												$status = 'minus';
												$title = '...';
											} elseif ($status === 'Approved') {
												$status = 'check';
												$title = 'Approved';
											} elseif ($status === 'Disapproved') {
												$status = 'x';
												$title = 'Disapproved';
											}
										?>
											<tr>
												<th scope="row"><?php echo $num; ?></th>
												<td><?php echo $a_array['first_name']; ?></td>
												<td><?php echo $a_array['middle_name']; ?></td>
												<td><?php echo $a_array['last_name']; ?></td>
												<td><?php echo $a_array['contact_number']; ?></td>
												<td><?php echo $a_array['email_address']; ?></td>
												<td><?php echo $ab['date_created']; ?></td>
												<td><span data-feather="<?php echo $status; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $title ?>"></span></td>
												<td>
													<button type="button" class="btn btn-warning px-2 fontsize-13 font-500" data-bs-toggle="tooltip" data-bs-placement="top" title="Full Info"><span data-feather="eye" class="text-white m-0"></span></button>
													<button type="button" onclick="download_resume(this.id)" id="<?php echo $ab['applicant_resume']; ?>" class="btn btn-primary px-2 fontsize-13 font-500" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Resume"><span data-feather="download" class="text-white m-0"></span></button>
													<button type="button" onclick="approve_alert(this.id)" id="app_<?php echo $ab['_id']; ?>" class="btn bg-cp2 px-2 fontsize-13 font-500" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve"><span data-feather="check" class="text-white m-0"></span></button>
													<button type="button" onclick="disapprove_alert(this.id)" id="app_<?php echo $ab['_id']; ?>" class="btn btn-danger px-2 fontsize-13 font-500" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete/Disapprove"><span data-feather="trash" class="text-white m-0"></span></button>
												</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
				<?php
						}
					}
				}
				?>

			</div>
		</div>
		<form action="#" id="action_form">
			<input type="hidden" id="action_input">
		</form>
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
		document.getElementById('applicants-link').classList.add('active')

		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
		})

		function approve_alert(app_id) {
			const title = 'Are you sure?'
			const text = 'The applicant will be notified when you accept.'
			const icon = 'warning'
			const cancel = true
			const confirmbtn_text = 'Yes! Approve'
			const action = "Approve"
			show_alert_options(title, text, icon, cancel, confirmbtn_text, action, app_id);
		}

		function disapprove_alert(app_id) {
			const title = 'Are you sure?'
			const text = 'The applicant will be notified when you declined.'
			const icon = 'warning'
			const cancel = true
			const confirmbtn_text = 'Yes! Disapprove'
			const action = "Disapprove"
			show_alert_options(title, text, icon, cancel, confirmbtn_text, action, app_id);
		}

		function download_resume(id) {
			window.location.href = id;
		}

		function approve_app(app_id) {
			document.getElementById('action_input').name = 'approve'
			document.getElementById('action_input').value = app_id

			$.post(
				"includes/actions.php",
				$("#action_form").serialize(),
				function(data) {
					if (data === "Success") {
						const icon = 'success'
						const title = 'Approved!'
						const text = 'The result has been sent to the applicant.'
						const button = "OK"
						const location = "applicants.php"
						show_alert(icon, title, text, button, location)
					} else {
						alert('Something went wrong! Please Refresh the page.')
					}
				}
			);
		}

		function disapprove_app(app_id) {
			document.getElementById('action_input').name = 'disapprove'
			document.getElementById('action_input').value = app_id
			$.post(
				"includes/actions.php",
				$("#action_form").serialize(),
				function(data) {
					if (data === "Success") {
						const icon = 'success'
						const title = 'Disapproved!'
						const text = 'The result has been sent to the applicant.'
						const button = "OK"
						const location = "applicants.php"
						show_alert(icon, title, text, button, location)
					} else {
						alert('Something went wrong! Please Refresh the page.')
					}
				}
			);
		}
	</script>
</body>

</html>