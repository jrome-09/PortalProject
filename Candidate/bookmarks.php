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
		<div class="background-thicker-light">
			<div class="max-width-container pb-3 mt-3">
				<form action="#" class="mt-4">
					<div class="d-flex align-items-center">
						<div class="input-group flex-nowrap me-1">
							<div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
								<span data-feather="search" class="color-black"></span>
							</div>
							<input type="text" class="form-control border-start-0 fontsize-14" placeholder="Job Title...">
						</div>
						<div class="input-group flex-nowrap me-1">
							<div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
								<span data-feather="map-pin" class="color-black"></span>
							</div>
							<input type="text" class="form-control fontsize-14 border-start-0" placeholder="Area/City or Town">
						</div>
						<div class="input-group">
							<div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
								<span data-feather="user" class="color-black"></span>
							</div>
							<select name="" id="searchSelect" class="form-select color-light border-start-0 fontsize-14">
								<option selected>Specialization</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
							<button class="btn btn-primary fontsize-14" type="button">Search</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="bg-light">
			<div class="max-width-container">
				<div class="bg-white border rounded px-4 py-3 mb-2">
					<p class="color-black fontsize-14 m-0">Saved Jobs (0)</p>
				</div>
				<div class="row" id="application-row-container">
					<div class="col-md-6 p-1" id="multiply-application">
						<div class="bg-white rounded border p-4 shadow-sm-hover">
							<div class="row">
								<div class="col-lg-2">
									<div class="d-flex justify-content-start align-items-center">
										<div class="image-container rounded background-thicker-light mb-2 d-block" style="height: 70px; width: 70px; min-width: 70px;">

										</div>
									</div>
								</div>
								<div class="col-lg-10">

									<div class="btn-group float-end">
										<button type="button" class="btn p-1 border-1 rounded-circle hover-text-primary hover-text-feather" data-bs-toggle="dropdown"><span data-feather="chevron-down" style="height: 22px; width: 22px;"></span></button>
										<ul class="dropdown-menu mt-1 p-2">
											<li><a href="#" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">Remove Bookmark</a></li>
											<li><a href="#" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">Open in New Tab</a></li>
										</ul>
									</div>

									<a href="#" onclick="ShowDetails()">
										<h6 class="mb-0">Software Developer</h6>
									</a>
									<p class="color-black fontsize-14">Company Name</p>
									<p class="color-light fontsize-14 mb-0">Job Type: Full Time</p>
									<p class="color-light fontsize-14 mb-0">Monthly Salary: PHP 30k</p>
									<p class="font-super--small color-light text-end m-0">Applied on May 0, 2021</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					for (i = 0; i < 5; i++) {
						const Mydiv = document.getElementById("multiply-application");
						var divclone = Mydiv.cloneNode(true);
						var parentcon = document.getElementById("application-row-container");
						parentcon.appendChild(divclone);
					}
				</script>
			</div>
		</div>
	</main>

	<?php
	require "../Jobs/details.php";
	require "../html/footer.html";
	?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script>
		loadPage();
		feather.replace();
		document.title = "Candidate | Bookmarks";
		$(document).mouseup(function(e) {
        const id = document.getElementById('job-details');
        if (id.classList.contains('visible')) {
            var container = $("#job-details");
            if (!container.is(event.target) && !container.has(event.target).length) {
                ShowDetails()
            }
        }
    });
	</script>
</body>

</html>