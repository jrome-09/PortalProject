<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username'])) {
    require "includes/db_connection.inc.php";
    require "includes/functions.inc.php";
    $nav_username;
    $profile_image;
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
        $profile_image = str_replace("../", "", $profile_image);
    } else {
        $profile_image = "uploads/profiles/default_profile02.png";
    }
    if (isset($_SESSION["username"])) {
        $nav_username = $_SESSION["username"];
    } else {
        $nav_username = "Username";
    }
}
?>
<link rel="stylesheet" id="nav-stylesheet" href="css/index-nav.css">
<header id="index-header" class="bg-white">
    <div class="max-width-container py-1">
        <div class="d-flex align-items-center my-2" id="nav-outer-container">
            <div class="d-flex align-items-center">
                <div class="image-container bg-light round me-2" style="width: 50px; height: 50px;">

                </div>
                <h4 class="m-0"><strong><a href="index.php" class="color-black hover-text-primary" id="web-id">CCIT</a></strong></h4>
            </div>
            <div id="mobile--nav">
                <nav class="mx-2">
                    <ul class="m-0">
                        <li class="d-inline-block">
                            <a href="index.php" id="index-link" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Home</a>
                        </li>
                        <li class="d-inline-block">
                            <a href="about.php" id="about-link" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">About us</a>
                        </li>
                        <li class="d-inline-block">
                            <a href="contacts.php" id="contacts-link" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Contacts</a>
                        </li>
                        <li class="d-inline-block">
                            <a href="Alumni/alumni-index.php" id="alumni-link" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">CCIT Alumni</a>
                        </li>
                        <li class="d-inline-block">
                            <div class="btn-group">
                                <button type="button" class="btn rounded-end color-black fontsize-14 font-500 hover-text-primary hover-text-feather" id="more-btn" data-bs-toggle="dropdown">More <span data-feather="chevron-down" class="color-black"></span></button>
                                <ul class="dropdown-menu mt-1 p-2">
                                    <li><a href="Employers/employers-profile-page.php" id="emp-profiles-link" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400 hover-text-primary">Employer Profiles</a></li>
                                    <li><a href="Jobs/jobs.php" id="jobs-link-out" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400 hover-text-primary">Search Jobs</a></li>
                                    <li><a href="Forum/forum-index.php" id="forum-link" class="dropdown-item rounded py-2 pe-5 color-light fontsize-14 font-400 hover-text-primary">Forum</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="ms-auto position-relative" id="left">
                    <?php
                    if (isset($_SESSION['username'])) {
                    ?>
                        <div class="btn-group align-items-center">
                            <div class="image-container bg-white border rounded-circle" style="height: 30px; width: 30px;">
                                <img src="<?php echo $profile_image; ?>" alt="profile_picture" style="height: 100%;">
                            </div>
                            <button type="button" onclick="show_ul_dropdown()" class="btn rounded-end color-black fontsize-14 font-500 hover-text-primary hover-text-feather" id="user-name"><?php echo $nav_username ?> <span data-feather="chevron-down" class="color-black"></span></button>
                        </div>
                        <?php
                        require 'html/dropdown_profile.html';
                        ?>
                        <span class="notification_container me-3 notification_web">
                            <span data-feather="bell" onclick="toggle_dropdown_notification()"></span>
                            <div class="position-absolute bg-white shadow-sm border rounded notification_dropdown" id="web_notification_dropdown">
                                <header class="bg-light p-3  fontsize-14 color-black font-500 border-bottom">
                                    Alerts
                                </header>
                                <main>

                                </main>
                            </div>
                        </span>
                        <a href="Employers/index.php" type="button" id="emp-btn-link" class="btn btn-outline-primary border-2 px-4 py-2 fontsize-14 font-500">For Employers</a>
                    <?php
                    } else {
                    ?>
                        <a href="signup-form.php" id="signup-btn" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Sign up</a>
                        <p class="mb-0 color-black d-inline-block" id="v-line">|</p>
                        <a href="candidate-login-form.php" id="login-btn" class="fontsize-14 font-500 no-text-decor color-black hover-text-primary mx-2 px-1">Login</a>
                        <a href="Employers/index.php" id="for_emp" type="button" class="btn btn-outline-primary border-2 px-4 py-2 fontsize-14 font-500">For Employers</a>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <span data-feather="align-justify" onclick="toggle_nav()" id="bars" style="height: 32px; width: 32px;" class="hover-text-primary"></span>
            </div>
        </div>
        <style>
            #mobile--nav nav ul li a.active,
            #signup-btn.active,
            #login-btn.active {
                border-bottom: 2px solid #0d6efd;
                color: #0d6efd !important;
                padding-bottom: 0.5rem;
            }

            .notification_dropdown {
                width: 100%;
                height: 400px;
                max-height: 400px;
                margin-top: 2px;
                overflow-y: scroll;
                border-top: 2px solid #0d6efd !important;
                visibility: hidden;
            }

            .notification_dropdown.active {
                visibility: visible;
            }
        </style>
        <script>
            function toggle_nav() {
                const id = document.getElementById('mobile--nav');
                id.classList.toggle('active');
            }

            <?php
            if (isset($_SESSION["username"])) {
            ?>
                document.getElementById('job-app-link').href = 'Candidate/job-applications.php'
                document.getElementById('bookmarks-link').href = 'Candidate/bookmarks.php'
                document.getElementById('dash-link').href = 'Candidate/candidate.php'
                document.getElementById('jobs-link').href = 'Jobs/jobs.php'
                document.getElementById('log-out-link').href = 'includes/logout.inc.php'

                function show_ul_dropdown() {
                    document.getElementById('dropdown_ul').classList.toggle('show');
                }
            <?php
                echo "document.getElementById('dropdown_img').src = '" . $profile_image . "';";
                echo "document.getElementById('dropdown_username').innerHTML = '" . $nav_username . "';";
                echo "document.getElementById('dropdown_university').innerHTML = '" . $university . "';";
            }
            ?>
        </script>
    </div>
</header>