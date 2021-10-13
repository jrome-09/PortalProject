<?php
require "style-link.html";
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
	if (!isset($_SESSION)) {
		session_start();
	}

	require "../includes/nav.php";

	?>
	<main class="background-thicker-light">
		<div class="max-width-container">
			<div class="border rounded p-4 mb-2 bg-white shadow-sm">
				<p class="font-700 color-black fontsize-14 mb-2"><span data-feather="search"></span> Search Companies</p>
				<div class="input-group color-black  flex-nowrap me-1" style="max-width: 600px;">
					<div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
						<span data-feather="user" class="color-black"></span>
					</div>
					<input type="text" class="border form-control border-start-0 fontsize-13" placeholder="Company name...">
					<button class="btn bg-cp2 fontsize-14">Search</button>
				</div>
			</div>
			<div class="border rounded bg-white p-4 shadow-sm">
				<div class="row">
					<?php
					$sql = 'SELECT * FROM employer_details';
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
					?>
						<div class="col-sm-2">
							<div class="border p-4 rounded bg-white text-center" style="min-height: 200px;">
									<div class="image-container border rounded hw-70px m-auto mb-2">
										<img src="<?php echo $row['company_logo']?>" alt="">
									</div>
									<a id="<?php echo 'company_' . $row['_id'];?>" onclick="go_page(this.id)" href="#" class="fontsize-13 font-500 text-primary ntd"><?php echo $row['company_name'];?></a>
									<p class="font-super--small color-black m-0">000 Posted jobs</p>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<form action="employers-detail.php" method="post" id="hiddenform">
			<input type="hidden" name="company_id" id="company_id">
		</form>
	</main>
	<?php
	require "../Jobs/details.php";
	require "../html/footer.html";
	?>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script src="../javascript/jQueryRequest.js"></script>
	<script src="../javascript/validations.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.title = "CCIT | Employer List"
		document.getElementById('web-id').href = "../index.php"
		document.getElementById('index-link').href = "../index.php"
		var parent = document.getElementById('employer-prof-link')
		parent.classList.toggle('active');

		function go_page(comp_id) {
			document.getElementById('company_id').value = comp_id;
			const form = document.getElementById('hiddenform')
			form.submit()
		}
	</script>
</body>

</html>