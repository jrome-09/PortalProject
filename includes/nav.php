<?php
$directory;
$log_directory;
if (file_exists('includes/login.inc.php')) {
	$directory = 'includes/login.inc.php';
} else {
	$directory = '../includes/login.inc.php';
}

if (file_exists('Candidate/candidate.php')) {
	$log_directory = 'Candidate/candidate.php';
} else {
	$log_directory = '../Candidate/candidate.php';
}

if (!isset($_SESSION)) {
	session_start();
}

if (file_exists("includes/db_connection.inc.php")) {
	require "includes/db_connection.inc.php";
} else {
	require "../includes/db_connection.inc.php";
}

if (file_exists("includes/functions.inc.php")) {
	require "includes/functions.inc.php";
} else {
	require "../includes/functions.inc.php";
}

if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
	$nav_username;
	$profile_image;
	$cname;
	$caddress;
}

if (isset($_SESSION['username'])) {
	$get_uid = uidExists($conn, $_SESSION['uemail']);
	$uid = $get_uid['_id'];
	$college = get_college($conn, $uid);
	$university;

	if ($college) {
		$university  = $college['university'];
	} else {
		$university = "Undefined.";
	}
	if ($get_uid != "") {
		$profile_image = $get_uid['user_profile'];
		if (!file_exists($profile_image)) {
			$profile_image = str_replace("../", "", $profile_image);
		}
	} else {
		if (file_exists("uploads/profiles/default_profile02.png")) {
			$profile_image = "uploads/profiles/default_profile02.png";
		} else {
			$profile_image = "../uploads/profiles/default_profile02.png";
		}
	}
	if (isset($_SESSION["username"])) {
		$nav_username = $_SESSION["username"];
	} else {
		$nav_username = "Username";
	}

	if (!$profile_image) {
		if (file_exists("uploads/profiles/default_profile02.png")) {
			$profile_image = "uploads/profiles/default_profile02.png";
		} else {
			$profile_image = "../uploads/profiles/default_profile02.png";
		}
	}
}

if (isset($_SESSION['emp_email'])) {
	$emp_email = $_SESSION['emp_email'];
	$emp = emp_uidExists($conn, $emp_email);
	if ($emp) {
		$nav_username = $emp['first_name'] . " " . $emp['last_name'];
		$cname = $emp['company_name'];
		$caddress = $emp['company_address'];
		if ($emp['company_logo'] != "") {
			if (file_exists($emp['company_logo'])) {
				$profile_image = $emp['company_logo'];
			} else {
				$a = $emp['company_logo'];
				$profile_image = str_replace("../", "", $a);
			}
		} else {
			if (file_exists("uploads/profiles/default_profile02.png")) {
				$profile_image = "uploads/profiles/default_profile02.png";
			} else {
				$profile_image = "../uploads/profiles/default_profile02.png";
			}
		}
	}
}


?>

<header class="border-bottom">
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
						if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
						?>
							<a href="includes/logout.inc.php" class="ntd htp text-end fontsize-13 text-white" id="log-out-link">Log out</a>
						<?php
						} else {
						?>
							<a href="#" id="reg-link" class="ntd htp text-end fontsize-13 text-white">Register</a>
						<?php
						}
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
							<!-- <a href="#" onclick="show_ul_dropdown()" class="fontsize-13 text-white htp htpf m-1 ntd"><?php echo $nav_username; ?><span data-feather="chevron-down" class="text-white htp"></a> -->
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
						<a href="Employers/employers-profile-page.php" class="ntd htp fontsize-13 mx-2 my-0 color-black font-500" id="employer-prof-link">Employer Profile</a>
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
</header>
<script>
	function show_loggin() {
		var data = '<p class="fontsize-13 color-black text-center">Enter your registered email and password.</p>' +
			'<form action="#" id="login_form">' +
			'<label for="login--email" class="required color-light text-start">Email Address</label>' +
			'<input type="text" name="login_email" class="form-control fontsize-13 mb-2" id="login--email">' +
			'<label for="login-password" class="required color-light text-start" >Password</label>' +
			'<input type="password" name="login_password" class="form-control fontsize-13" id="login-password">' +
			'</form>' +
			'<div class="swal2-validation-message fontsize-13 d-none mb-2" id="swal2-validation-message" style="display: flex;"></div>'
		Swal.fire({
			title: 'User Login',
			html: data,
			showCancelButton: true,
			confirmButtonText: 'Log in',
			footer: '<p class="font-small text-center color-black m-0 mt-3">New User? <a href="signup-form.php">Sign up now</a></p>',
			preConfirm: function validation() {
				const dir = "<?php echo $directory; ?>";
				const log_dir = "<?php echo $log_directory; ?>";
				validate_login(dir, log_dir)
				return false;
			},
			customClass: {
				popup: "me-17px swal-width-400 font-poppins",
				title: "color-black font-700 fontsize-24 mb-4",
				htmlContainer: "color-light pt-0 fontsize-13",
				confirmButton: "btn bg-cp2 px-4 fontsize-13 font-500",
				cancelButton: "btn px-4 fontsize-13 font-500",
				footer: "py-1"
			}
		}).then((result) => {
			if (result.isConfirmed) {
				return false;
			}
		})
	}

	function show_ul_dropdown() {
		document.getElementById('dropdown_ul').classList.toggle('show');
	}

	<?php
	if (isset($_SESSION['emp_email'])) {
		echo "document.getElementById('dropdown_img').src = '" . $profile_image . "';";
		echo "document.getElementById('dropdown_username').innerHTML = '" . $nav_username . "';";
		echo "document.getElementById('dropdown_university').innerHTML = '" . $cname . "';";

		$loglink_ids2 = ['log-out-link', 'mypage-link', 'applicants-link'];
		$loglink_directories2 = ['includes/logout.inc.php', 'Employers/employer-page.php', 'Employers/applicants.php'];

		for ($i = 0; $i < count($loglink_ids2); $i++) {
			$explode = explode("/", $loglink_directories2[$i])[1];
			if (file_exists($loglink_directories2[$i])) {
				echo 'document.getElementById("' . $loglink_ids2[$i] . '").href ="' . $loglink_directories2[$i] . '";';
				//echo "console.log('".$link_directories[$i] ."');";
			} elseif (file_exists($explode)) {
				echo 'document.getElementById("' . $loglink_ids2[$i] . '").href = "' . $explode . '";';
			} elseif (file_exists('../' . $loglink_directories2[$i])) {
				//echo "console.log('../".$link_directories[$i]."');";
				echo 'document.getElementById("' . $loglink_ids2[$i] . '").href = "../' . $loglink_directories2[$i] . '";';
			} else {
				echo 'document.getElementById("' . $loglink_ids2[$i] . '").href = "#";';
			}
		}
	}

	if (isset($_SESSION['username'])) {
		echo "document.getElementById('dropdown_img').src = '" . $profile_image . "';";
		echo "document.getElementById('dropdown_username').innerHTML = '" . $nav_username . "';";
		echo "document.getElementById('dropdown_university').innerHTML = '" . $university . "';";

		$loglink_ids = ['mypage-link', 'log-out-link', 'dash-link', 'bookmarks-link', 'jobs-link', 'job-app-link', 'log-out-link-drop'];
		$loglink_directories = ['Candidate/candidate.php', 'includes/logout.inc.php', 'Candidate/candidate.php', 'Candidate/bookmarks.php', 'Jobs/jobs.php', 'Candidate/job-applications.php', 'includes/logout.inc.php'];
		for ($i = 0; $i < count($loglink_ids); $i++) {
			$explode = explode("/", $loglink_directories[$i])[1];
			if (file_exists($loglink_directories[$i])) {
				echo 'document.getElementById("' . $loglink_ids[$i] . '").href ="' . $loglink_directories[$i] . '";';
				//echo "console.log('".$link_directories[$i] ."');";
			} elseif (file_exists($explode)) {
				echo 'document.getElementById("' . $loglink_ids[$i] . '").href = "' . $explode . '";';
			} elseif (file_exists('../' . $loglink_directories[$i])) {
				//echo "console.log('../".$link_directories[$i]."');";
				echo 'document.getElementById("' . $loglink_ids[$i] . '").href = "../' . $loglink_directories[$i] . '";';
			} else {
				echo 'document.getElementById("' . $loglink_ids[$i] . '").href = "#";';
			}
		}
	}

	$link_ids = ['web-id', 'index-link', 'about-link', 'contacts-link', 'alumni-link', 'employer-prof-link', 'jobs-link-nav', 'forum-link', 'emp-link', 'reg-link'];
	$link_directories = ['index.php', 'index.php', 'about.php', 'contacts.php', 'Alumni/alumni-index.php', 'Employers/employers-profile-page.php', 'Jobs/jobs.php', 'Forum/forum-index.php', 'Employers/index.php', 'signup-form.php'];
	for ($i = 0; $i < count($link_ids); $i++) {
		if (file_exists($link_directories[$i])) {
			echo 'document.getElementById("' . $link_ids[$i] . '").href ="' . $link_directories[$i] . '";';
			//echo "console.log('".$link_directories[$i] ."');";
		} else {
			//echo "console.log('../".$link_directories[$i]."');";
			echo 'document.getElementById("' . $link_ids[$i] . '").href = "../' . $link_directories[$i] . '";';
		}
	}

	?>
</script>
<?php
if (file_exists("node_modules/sweetalert2/dist/sweetalert2.all.min.js")) {
	echo '<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>';
} else {
	echo '<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>';
}
?>

<style>
	.swal2-html-container form#login_form label {
		text-align: left !important;
	}
</style>