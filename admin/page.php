<?php
require_once "../includes/head.php";
?>

<body class="bg-light">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <?php
    require_once "../html/script.html";
    require "../includes/nav.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <main class="position-relative">
        <div class="max-width-container">
            <div class="d-flex custom-row">
                <div class="custom-col">
                    <?php
                    require_once "sidenav.php";
                    ?>
                </div>
                <div class="custom-col" style="width: 100%;">
                    <div class="border rounded bg-white px-4 py-3 color-black font-500 shadow-sm mb-2">
                        <button class="btn bg-light me-4" id="sidenav-toggler" style="display: none;" onclick="toggle_sidenav()">
                            <span data-feather="menu" class="color-black me-0"></span>
                        </button>
                        Dashboard
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <div class="border rounded bg-white shadow-sm p-4 py-3 d-flex align-items-center">
                                        <div class="bg-primary me-2 hw-40px rounded d-flex align-items-center justify-content-center">
                                            <span class="me-0 text-white" data-feather="briefcase"></span>
                                        </div>
                                        <div>
                                            <p class="color-black font-500 m-0">Job Post</p>
                                            <p class="color-black m-0">
                                                <?php
                                                $sql = "SELECT COUNT(*) FROM job_description";
                                                echo $count = get_result_count($conn, $sql);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border rounded bg-white shadow-sm p-4 py-3 d-flex align-items-center">
                                        <div class="bg-1 me-2 hw-40px rounded d-flex align-items-center justify-content-center">
                                            <span class="me-0 text-white" data-feather="user-check"></span>
                                        </div>
                                        <div>
                                            <p class="color-black font-500 m-0">Employers</p>
                                            <p class="color-black m-0">
                                                <?php
                                                $sql = "SELECT COUNT(*) FROM employer_details";
                                                echo $count = get_result_count($conn, $sql);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <div class="border rounded bg-white shadow-sm p-4 py-3 d-flex align-items-center">
                                        <div class="bg-2 me-2 hw-40px rounded d-flex align-items-center justify-content-center">
                                            <span class="me-0 text-white" data-feather="users"></span>
                                        </div>
                                        <div>
                                            <p class="color-black font-500 m-0">Jobseekers</p>
                                            <p class="color-black m-0">
                                                <?php
                                                $sql = "SELECT COUNT(*) FROM jobseeker";
                                                echo $count = get_result_count($conn, $sql);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="border rounded bg-white shadow-sm p-4 py-3 d-flex align-items-center">
                                        <div class="bg-warning me-2 hw-40px rounded d-flex align-items-center justify-content-center">
                                            <span class="me-0 text-white" data-feather="award"></span>
                                        </div>
                                        <div>
                                            <p class="color-black font-500 m-0">Alumni</p>
                                            <p class="color-black m-0">
                                                <?php
                                                $sql = "SELECT COUNT(*) FROM alumni";
                                                echo $count = get_result_count($conn, $sql);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="border rounded bg-white shadow-sm overflow-hidden" style="height: 500px;">
                                <header class="bg-2xlight p-4 py-3 border-bottom">
                                    <div class="d-flex justify-content-between">
                                        <div class="color-black">
                                            Latest Job Post
                                        </div>
                                        <div class="color-black">
                                            <a href="#" class="ntd">
                                                <span data-feather="eye" class="color-black"></span>
                                            </a>
                                        </div>
                                    </div>
                                </header>
                                <main class="p-4 overflow-scroll pb-5" style="height: 100%;">
                                    <?php
                                    $sql = "SELECT * FROM `job_description` ORDER BY _id DESC";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $eid = $row['employer_id'];
                                        $data = get_emp($conn, $eid);
                                    ?>
                                        <div class="border rounded bg-white shadow-sm p-4 mb-2">
                                            <p class="font-500 color-black"><?php echo $row['job_title'] ?></p>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="image-container hw-40px border rounded bg-white me-2">
                                                    <img src="
                                                        <?php
                                                        if (file_exists($data['company_logo'])) {
                                                            echo $data['company_logo'];
                                                        } else {
                                                            echo str_replace('../', "", $data['company_logo']);
                                                        }
                                                        ?>
                                                    " alt="">
                                                </div>
                                                <div>
                                                    <p class="color-black font-500 m-0"><?php echo $data['company_name'] ?></p>
                                                    <p class="color-black m-0"><?php echo $data['company_address'] ?></p>
                                                </div>
                                            </div>
                                            <p class="text-secondary fontsize-n12 m-0 text-end">Date: <?php echo $row['date_posted'] ?></p>
                                        </div>

                                    <?php
                                    }
                                    ?>
                                </main>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded bg-white shadow-sm" style="height: 500px;">
                                <header class="bg-2xlight py-3 px-4 color-black border-bottom">
                                    <div class="d-flex justify-content-between">
                                        <div class="color-black">
                                            <span data-feather="bell"></span> Alerts
                                        </div>
                                        <div class="color-black">
                                            <a href="#" class="ntd">
                                                <span data-feather="eye" class="color-black"></span>
                                            </a>
                                        </div>
                                    </div>
                                </header>
                                <main class="p-0 position-relative pt-1">
                                    <ul class="p-0 m-0">
                                        <?php
                                        $sql = "SELECT * FROM `notification` WHERE receiver_type = 3 ORDER BY _id DESC";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            if ($row["status"] == 0) {
                                                $n_status = "active";
                                            } else {
                                                $n_status = "";
                                            }
                                        ?>
                                            <li class="position-relative d-flex">
                                                <a href="#" id="notification_<?php echo $row['_id'] ?>" onclick="submit_notification(this.id)" class="<?php echo $n_status ?> ntd color-black hvtext-yellow p-4 hvbg-light blh d-block pe-5" style=" flex-grow: 2;">
                                                    <?php echo $row['message'] ?>
                                                </a>
                                                <a href="#" class="p-4 ntd position-absolute hvbg-light hvtext-yellow" style="right: 0;" onclick="show_option()">
                                                    <span data-feather="trash-2" class="me-0"></span>
                                                </a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                    <form action="../notification.php" method="get" id="notification_form">
                                        <input type="hidden" id="notification_input" name="notif_id">
                                    </form>
                                    <script>
                                        function submit_notification(_id) {
                                            document.getElementById('notification_input').value = _id
                                            const form = document.getElementById('notification_form')
                                            form.submit();
                                        }
                                    </script>
                                </main>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <?php
    require_once "../includes/footer.php";
    ?>
    <script>
        document.title = "CCIT Admin Dashboard";
        document.getElementById("a_dash-link").classList.add('active')
        document.getElementById("ad_dash-link").classList.add('active')

        function show_option() {
            const title = 'Are you sure?'
            const text = "The message will be deleted and can't be recovered."
            const icon = 'warning'
            const cancel = true
            const confirmbtn_text = 'Yes! Delete'
            const confirmed_title = 'Success!'
            const confirmed_text = 'The message has been deleted.'
            const confirmed_icon = 'success'
            show_alert_options(title, text, icon, cancel, confirmbtn_text, confirmed_title, confirmed_text, confirmed_icon);
        }
    </script>
</body>

</html>