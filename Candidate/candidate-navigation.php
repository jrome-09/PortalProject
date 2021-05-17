<style>
	@media screen and (max-width: 1096px) {
		header nav ul {
			display: flex;
			flex-direction: column;
			text-align: center;
			margin: 0;
			padding: 0;
			padding-top: 50px;
			padding-bottom: 50px;
			border-bottom: 1px solid #dee2e6;
			border-top: 1px solid #dee2e6
		}

		header nav{
			display: block !important;
		}

		header nav ul li,
		#left button {
			margin-bottom: 30px;
		}

		#mobile--nav {
			flex-direction: column;
			justify-content: start !important;
			position: absolute;
			top: 74px;
			left: -100%;
			padding: 50px;
			padding-top: 20px;
			height: 100vh;
			background-color: #f8f9fa;
			transition: 0.8s;
			z-index: 50;
		}

		#mobile--nav.active{
			left: 0;
			transition: 0.84s;
		}

		#left {
			margin-top: 50px;
			margin-left: 0 !important;
			text-align: center;
			display: flex;
			flex-direction: column;
		}

		#bars {
			display: block !important;
		}

		#nav-outer-container {
			width: 100%;
			justify-content: space-between;
		}

	}

	header nav{
		display: flex;
		align-items: center;
	}

	#bars {
		display: none;

	}

	#mobile--nav {
		display: flex;
		justify-content: space-between;
		width: 100%;
	}
</style>

<header id="candidate-navbar" class="bg-white">
	<div class="max-width-container py-1">
		<div class="d-flex align-items-center my-2" id="nav-outer-container">
			<div class="d-flex align-items-center">
				<div class="image-container bg-light round me-2" style="width: 50px; height: 50px;">

				</div>
				<h4 class="m-0"><strong><a href="../index.php" class="color-black hover-text-primary" id="web-id">CCIT</a></strong></h4>
			</div>
			<div id="mobile--nav">
				<nav class="mx-2">
					<ul class="m-0">
						<li class="d-inline-block">
							<a href="../Candidate/candidate.php" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">MyPage</a>
						</li>
						<li class="d-inline-block">
							<a href="../Jobs/jobs.php" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Search Jobs</a>
						</li>
						<li class="d-inline-block">
							<a href="../Employers/employers-profile-page.php" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Employer Profiles</a>
						</li>
						<li class="d-inline-block">
							<a href="#" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">CCIT Alumni</a>
						</li>
						<li class="d-inline-block">
							<a href="#" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Forum</a>
						</li>
					</ul>
				</nav>
				<div class="ms-auto" id="left">
					<div class="btn-group">
						<button type="button" class="btn rounded-end color-black fontsize-14 font-500 hover-text-primary hover-text-feather" id="user-name" data-bs-toggle="dropdown">Username <span data-feather="chevron-down" class="color-black"></span></button>
						<ul class="dropdown-menu mt-1 p-2">
							<li><a href="#" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">User Profile</a></li>
							<li><a href="../../PortalProject/Candidate/job-applications.php" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">Job Applications</a></li>
							<li><a href="../Candidate/bookmarks.php" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">Bookmarks</a></li>
							<li><a href="#" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400">Logout</a></li>
						</ul>
					</div>
					<a href="#" type="button" class="btn btn-outline-primary border-2 px-4 py-2 fontsize-14 font-500">For Employers</a>
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<span data-feather="align-justify" onclick="toggle_nav()" id="bars" style="height: 32px; width: 32px;" class="hover-text-primary"></span>
			</div>
		</div>
		<script>
			function toggle_nav(){
				const id = document.getElementById('mobile--nav');
				id.classList.toggle('active');
			}
		</script>

	</div>
</header>