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
	<link rel="stylesheet" href="index.css">
	<?php
	require "../html/script.html";
	require "../Candidate/candidate-navigation.php"
	?>
	<div id="blur">
		<main>
			<div class="bg-light margin-top-nav">
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
									<a href="#" id="selectedUnemployed" onclick="removeFilter(this.id)" class="btn bg-light mb-2 me-2 shadow-sm hover-text-danger hover-text-feather-danger p-1 fontsize-13 color-light">
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
												<button type="button" onclick="getBoxes()" class="btn btn-primary fontsize-14 font-500 px-4">Filter</button>
											</div>
										</div>
										<script src="filter.function.js"></script>
										<script>
											cloneFilter();
											cloneSelected();
										</script>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-white p-4">
							<div class="row" id="alumni-row-container">
								<div class="col-md-3 pb-3" id="alumni-col">
									<div class="border p-4 bg-white rounded fontsize-14 color-black text-center alumni-card">
										<div class="hw-100px mb-2 bg-light border  mx-auto rounded"></div>
										<p class="font-500 mb-1">Jerome Cabrera</p>
										<p class="font-500 color-light font-super--small">BS Information Technology</p>
										<a href="#" type="button" onclick="toggleAlumniDetails()" class="btn btn-primary fontsize-13 font-500 px-5">
											View
										</a>
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end">
								<nav aria-label="...">
									<ul class="pagination mb-0">
										<li class="page-item disabled">
											<a class="page-link fontsize-14" href="#" tabindex="-1" aria-disabled="true">Previous</a>
										</li>
										<li class="page-item active"><a class="page-link fontsize-14" href="#">1</a></li>
										<li class="page-item" aria-current="page">
											<a class="page-link fontsize-14" href="#">2</a>
										</li>
										<li class="page-item fontsize-14"><a class="page-link" href="#">3</a></li>
										<li class="page-item fontsize-14">
											<a class="page-link fontsize-14" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>
							<style>
								.alumni-card {
									border-top: 4px solid #0d6efd !important;
								}
							</style>
							<script>
								for (i = 0; i < 11; i++) {
									const Mydiv = document.getElementById("alumni-col");
									var divclone = Mydiv.cloneNode(true);
									var parentcon = document.getElementById("alumni-row-container");
									parentcon.appendChild(divclone);
								}
							</script>
						</div>
					</div>

				</div>
			</div>
		</main>
		<?php
		require "../html/footer.html";
		?>
	</div>
	<div class="p-4" id="preview-modal">
		<?php
		require "preview.inc.php";
		?>
	</div>
	<style>
		@keyframes preview-animation {
			0% {
				opacity: 0;
				top: -100%;
			}

			60% {
				top: 12%;
			}

			100% {
				opacity: 1;
				top: 10%;
			}
		}

		#preview-modal {
			max-width: 1000px;
			width: 100%;
			position: absolute;
			top: -100%;
			left: 50%;
			transform: translateX(-50%);
			overflow: hidden;
			z-index: 3;
			margin: auto;
			transition: 0.4s ease-in;
			visibility: hidden;
			opacity: 0;
		}

		#preview-modal.active {
			animation-name: preview-animation;
			visibility: visible;
			top: 10%;
			animation-duration: 0.6s;
			opacity: 1;
		}

		#blur.active {
			transition: 0.4s;
			filter: blur(6px);
			pointer-events: none;
			user-select: none;
		}
	</style>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script>
		loadPage();
		feather.replace();
	</script>
</body>

</html>