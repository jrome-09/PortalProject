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
	<link rel="stylesheet" href="../css/global.css">
	<link rel="stylesheet" href="../css/style.css">
	<?php
	require "../html/script.html";
	require "../Candidate/candidate-navigation.php"
	?>
	<main>
		<div class="bg-light" style="margin-top: 74px;">
			<div class="max-width-container">
				<div class="d-flex justify-content-end">
					<div class="input-group mb-3" style="max-width: 500px;">
						<input type="text" class="form-control fontsize-14" placeholder="Recipient's username">
						<button class="btn btn-primary" type="button"><span data-feather="search" class="color-white" style="height: 18px; width: 18px;"></span></button>
					</div>
				</div>

				<div class="border rounded bg-white">
					<div class="border-bottom background-thicker-light px-4 py-2">
						<div class="row flex-column-reverse flex-sm-row">
							<div class="col-sm-10 d-flex color-light fontsize-13 flex-wrap" id="selectedFilterContainer">
								<a href="#" id="selectedUnemployed" class="btn bg-light mb-2 me-2 shadow-sm hover-text-danger hover-text-feather-danger p-1 fontsize-13 color-light">
									<p class="mb-0 d-inline-block font-500">Unemployed</p>
									<span data-feather="x" style="height: 14px; width: 14px;"></span>
								</a>
							</div>
							<div class="col-sm-2 d-flex justify-content-end position-relative">
								<div class="filter-group color-black fontsize-13" style="min-width: 76px;">
									<a type="button" id="filter-btn" onclick="setFilter()" class="color-black fontsize-13 px-2 py-1 btn font-500 hover-text-primary hover-text-feather">
										Filters<span data-feather="chevron-down" class="color-black"></span>
									</a>
									<div class="border rounded bg-white shadow-sm position-absolute" id="filter-list-card">
										<div id="filter-top" class="bg-light rounded"></div>
										<div class="background-thicker-light px-4 py-3" id="filter-header">
											<p class="mb-0">Show only:</p>
										</div>
										<div id="filter-content" class="p-4">
											<div class="form-check" id="form-check">
												<input class="form-check-input" type="checkbox" value="" id="Unemployed">
												<label class="form-check-label" for="Unemployed">
													Unemployed
												</label>
											</div>
										</div>
										<div class="background-thicker-light px-4 py-3 text-end" id="filter-header">
											<button type="button" class="btn btn-primary fontsize-14 font-500 px-4">Filter</button>
										</div>
									</div>
									<script>
										cloneFilter();
										cloneSelected()

										function cloneSelected() {
											const filter = ["Self-Employed", "Employed", "BS Computer Science", "BS Information Technology", "BS Library and Information Science", "Diploma in Computer Technology"];
											for (var i = 0; i < filter.length; i++) {
												const filter_id = document.getElementById("selectedUnemployed");
												var divclone = filter_id.cloneNode(true);
												divclone.id = "selected" + filter[i];
												var child = divclone.children;
												child[0].innerHTML = filter[i];
												var parentcon = document.getElementById("selectedFilterContainer");
												parentcon.appendChild(divclone);
											}
										}

										function cloneFilter() {
											const filter = ["Self-Employed", "Employed", "BS Computer Science", "BS Information Technology", "BS Library and Information Science", "Diploma in Computer Technology"];
											for (var i = 0; i < filter.length; i++) {
												const form_id = document.getElementById("form-check");
												var divclone = form_id.cloneNode(true);
												var child = divclone.children;
												child[0].id = filter[i];
												child[1].innerHTML = filter[i];
												child[1].setAttribute("for", filter[i]);
												var parentcon = document.getElementById("filter-content");
												parentcon.appendChild(divclone);
											}
										}

										function setFilter() {
											document.getElementById('filter-list-card').classList.toggle('active');
										}
									</script>
									<style>
										#selectedFilterContainer a {
											padding: 0 0.25rem !important;
											display: none;
										}

										#selectedFilter .feather {
											height: 14px !important;
											width: 14px !important;
										}

										#filter-top {
											width: 100%;
											height: 0.3rem;
										}

										@keyframes filterToggle {
											0% {
												opacity: 0;
												top: 0;
											}

											60% {
												top: 40px;
											}

											100% {
												opacity: 1;
												top: 36px;
											}
										}


										#filter-list-card {
											width: 300px;
											right: 0;
											transition: 0.4s;
											opacity: 1;
											display: none;
										}

										#filter-list-card.active {
											animation-name: filterToggle;
											animation-duration: 0.4s;
											top: 36px;
											display: block;
										}
									</style>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-white p-4">

					</div>
				</div>
			</div>
		</div>
	</main>
	<?php
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
	</script>
</body>

</html>