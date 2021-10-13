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

if (file_exists('css/mobile.css')) {
	echo '<link rel="stylesheet" href="css/mobile.css">';
} else {
	echo '<link rel="stylesheet" href="../css/mobile.css">';
}

if (file_exists('scripts/libraries.php')) {
	require_once 'scripts/libraries.php';
} else {
	require_once '../scripts/libraries.php';
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<header class="bg-white shadow-sm">
	<div class="bg-2">
		<div class="max-width-container py-1">
			<div class="row">
				<div class="col-sm-6 text-yellow hvtext-yellow">
					University of Northern Philippines
				</div>
				<div class="col-sm-6 text-end">
					<a href="#" id="emp-link" class="decor-none text-white me-4 hvtext-yellow">
						<span data-feather="briefcase" class="text-white" id="emp-span"></span>
						For Employers
					</a>
					<?php
					if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
					?>
						<a href="#" id="log-out-link" class="decor-none text-white hvtext-yellow">
							<span data-feather="arrow-right" class="text-white"></span>
							Log out
						</a>
					<?php
					} else {
					?>
						<a href="#" id="reg-link" class="decor-none text-white hvtext-yellow">
							<span data-feather="arrow-right" class="text-white" id="reg-span"></span>
							Register
						</a>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-1">
		<div class="max-width-container py-3">
			<div class="row">
				<div class="col-md-4 mb-2 d-flex align-items-center">
					<div class="img-container border rounded-circle bg-white me-2" style="height: 50px; width: 50px; min-width: 50px;">

					</div>
					<a href="#" id="web-id" class="decor-none font-900 text-white hvtext-yellow">
						COLLEGE OF COMMUNICATION AND INFORMATION TECHNOLOGY
					</a>
				</div>
				<div class="col-md-5 mb-2 d-flex align-items-center">
					<div class="input-group mb-0">
						<input type="text" class="form-control" placeholder="Search Job...">
						<div class="input-group-append">
							<button class="btn bg-2 rounded-right round search-btn border-secondary" type="button">Search</button>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2 d-flex align-items-center justify-content-end web position-relative">
					<div class="image-container border rounded-circle me-2 bg-white" style="height: 30px; width: 30px;">
						<img src="
					<?php if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
						echo $profile_image;
					} else {
						if (file_exists('images/default_profile.png')) {
							echo 'images/default_profile.png';
						} else {
							echo '../images/default_profile.png';
						}
					} ?>" alt="">
					</div>
					<?php
					if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
						if (isset($_SESSION['username'])) {
							if (file_exists('includes/notification.php')) {
								require_once 'includes/notification.php';
							} else {
								require_once '../includes/notification.php';
							}
					?>
							<div class="ms-1">
								<a href="#" onclick="document.getElementById('dropdown_ul').style.display = 'block'" class="decor-none text-white font-500 hvtext-yellow">
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
								<a href="#" onclick="document.getElementById('dropdown_ul').style.display = 'block'" class="decor-none text-white font-500 hvtext-yellow">
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
						<a href="#" id="lgn-btn" onclick="show_loggin()" class="decor-none text-white font-500 hvtext-yellow">
							<span data-feather="log-in" class="text-white"></span>
							Log in
						</a>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="border-bottom">
		<div class="max-width-container py-0 ">
			<nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
				<div class="navbar-brand align-items-center justify-self-start mobile d-none">
					<div class="image-container border rounded-circle me-2 bg-white" style="height: 30px; width: 30px;">
						<img src="
                        <?php
						if (file_exists('images/default_profile.png')) {
							echo 'images/default_profile.png';
						} else {
							echo '../images/default_profile.png';
						}
						?>
                        " alt="">
					</div>
					<a href="#" class="decor-none color-black font-500 hvtext-yellow">
						Log in
					</a>
				</div>
				<button class="navbar-toggler my-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="index-link">Home <span class="sr-only"></span></a>
						</li>
						<?php
						if (isset($_SESSION['username']) || isset($_SESSION['emp_email'])) {
						?>
							<li class="nav-item">
								<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="mypage-link">My Page <span class="sr-only"></span></a>
							</li>
						<?php
						}
						?>
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="about-link">About us <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="contacts-link">Contacts <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="alumni-link">CCIT Alumni <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="employer-prof-link">Companies <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="jobs-link-nav">Search Jobs <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link color-black font-400 px-4 hvbg-ligth hvtext-yellow" href="#" id="forum-link">Forum <span class="sr-only"></span></a>
						</li>
					</ul>
				</div>
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
			'<div class="swal2-validation-message fontsize-13 d-none mb-2" id="swal2-validation-message-log" style="display: flex;"></div>'
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
				htmlContainer: "color-light pt-0 fontsize-13 text-start",
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

		$loglink_ids2 = ['log-out-link', 'mypage-link', 'applicants-link', 'dash-link'];
		$loglink_directories2 = ['includes/logout.inc.php', 'Employers/employer-page.php', 'Employers/applicants.php', 'Employers/employer-page.php'];

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

	if (!isset($_SESSION['username']) && !isset($_SESSION['emp_email'])) {
		$a = ['reg-link'];
		$b = ['signup-form.php'];
		for ($i = 0; $i < count($a); $i++) {
			if (file_exists($b[$i])) {
				echo 'document.getElementById("' . $a[$i] . '").href ="' . $b[$i] . '";';
			} else {
				echo 'document.getElementById("' . $a[$i] . '").href = "../' . $b[$i] . '";';
			}
		}
	}

	$link_ids = ['web-id', 'index-link', 'about-link', 'contacts-link', 'alumni-link', 'employer-prof-link', 'jobs-link-nav', 'forum-link', 'emp-link'];
	$link_directories = ['index.php', 'index.php', 'about.php', 'contacts.php', 'Alumni/alumni-index.php', 'Employers/employers-profile-page.php', 'Jobs/jobs.php', 'Forum/forum-index.php', 'Employers/index.php'];
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