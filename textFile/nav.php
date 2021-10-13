		<div class="bg-cp2">
			<div class="max-width-container py-1">
				<div class="row">
					<div class="col">
						<div class="fontsize-13 text-white d-inline-block">
							University of Northern Philippines
						</div>
					</div>
					<div class="col">
						<div class="float-end d-flex align-items-center">
							<span data-feather="briefcase" class="text-white me-2"></span>
							<a href="#" id="emp-link" class="ntd htp text-end fontsize-13 text-white me-4">For Employers</a>
							<span data-feather="arrow-right" class="text-white me-2"></span>

							<?php
							//if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
							?>
							<a href="includes/logout.inc.php" class="ntd htp text-end fontsize-13 text-white" id="log-out-link">Log out</a>
							<?php
							//} else {
							?>
							<a href="#" id="reg-link" class="ntd htp text-end fontsize-13 text-white">Register</a>
							<?php
							//}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-cp1">
			<div class="max-width-container py-3">
				<div class="row">
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-5 d-flex align-items-center">
								<div class="image-container border rounded-circle hw-70px bg-csfb">

								</div>
								<div class="p-2">
									<a href="index.php" class="ntd fontsize-13 font-700 text-white htp m-0" id="web-id">COLLEGE OF COMMUNICATION AND INFORMATION TECHNOLOGY</a>
								</div>
							</div>
							<div class="col-sm-7 d-flex align-items-center">
								<div class="input-group my-4">
									<input type="text" class="form-control fontsize-13" placeholder="Search Job Title..." aria-describedby="button-addon2">
									<button class="btn bg-cp2 text-white fontsize-13 font-500" type="button" id="button-addon2">Search</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 d-flex align-items-center justify-content-end position-relative">
						<div class="image-container border m-1 bg-csfb hw-30px rounded-circle">
							<img src="<?php if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
											echo $profile_image;
										} else {
											if (file_exists("uploads/profiles/default_profile02.png")) {
												echo "uploads/profiles/default_profile02.png";
											} else {
												echo "../uploads/profiles/default_profile02.png";
											}
										} ?>" alt="">
						</div>
						<span data-feather="bell" class="text-white m-1 htp"></span>

						<?php
						if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
							if (isset($_SESSION['username'])) {
						?>
								<div class="ms-1">
									<a href="#" onclick="show_ul_dropdown()" class="d-flex align-items-center fontsize-13 font-500 text-white htp htpf ntd">
										<?php echo $nav_username; ?>
										<span data-feather="chevron-down" class="text-white htp me-0"></span>
									</a>
									<div class="font-super--small text-warning font-500 m-0"><?php echo $university ?></div>
								</div>
								<?php
								if (file_exists("html/dropdown_profile.html")) {
									require 'html/dropdown_profile.html';
								} else {
									require '../html/dropdown_profile.html';
								}
							} elseif (isset($_SESSION['emp_email'])) {

								?>
								<div class="ms-1">
									<a href="#" onclick="show_ul_dropdown()" class="d-flex align-items-center fontsize-13 font-500 text-white htp htpf ntd">
										<?php echo $nav_username; ?>
										<span data-feather="chevron-down" class="text-white htp me-0"></span>
									</a>
									<div class="font-super--small text-warning font-500 m-0"><?php echo $cname ?></div>
								</div>
							<?php
								if (file_exists("html/emp_dropdown_profile.html")) {
									require 'html/emp_dropdown_profile.html';
								} else {
									require '../html/emp_dropdown_profile.html';
								}
							}
						} else {
							?>
							<a href="#" id="lgn-btn" class="fontsize-14 text-white htp m-1 ntd" onclick="show_loggin()">Login</a>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-white">
			<div class="max-width-container py-0">
				<nav>
					<ul class="m-0 text-center">
						<li class="p-2 d-inline-block hbg-light">
							<a href="index.php" class="ntd htp fontsize-13 mx-0 my-0 color-black font-500" id="index-link">Home</a>
						</li>
						<?php
						if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
						?>
							<li class="p-2 d-inline-block hbg-light">
								<a href="Candidate/candidate.php" class="ntd mx-2 htp fontsize-13 mx-2 my-0 color-black font-500" id="mypage-link">My Page</a>
							</li>
						<?php
						}
						?>
						<li class="p-2 d-inline-block hbg-light">
							<a href="about.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="about-link">About us</a>
						</li>
						<li class="p-2 d-inline-block hbg-light">
							<a href="contacts.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="contacts-link">Contacts</a>
						</li>
						<li class="p-2 d-inline-block hbg-light">
							<a href="Alumni/alumni-index.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="alumni-link">CCIT Alumni</a>
						</li>
						<li class="p-2 d-inline-block hbg-light">
							<a href="Employers/employers-profile-page.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="employer-prof-link">Companies</a>
						</li>
						<li class="p-2 d-inline-block hbg-light">
							<a href="Jobs/jobs.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="jobs-link-nav">Search Jobs</a>
						</li>
						<li class="p-2 d-inline-block hbg-light">
							<a href="Forum/forum-index.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="forum-link">Forum</a>
						</li>

					</ul>
				</nav>
			</div>
		</div>