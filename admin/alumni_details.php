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

    $id = str_replace("view_", "", $_GET['_id']);

    $sql = "SELECT * FROM `alumni` WHERE _id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc()
    ?>
    <main class="position-relative">
        <div class="max-width-container">
            <div class="d-flex justify-content-end mb-2">
                <a href="alumni_record.php" class="me-4"><span data-feather="arrow-left"></span>Return</a>
                <a href="#" class="ntd me-4 hvtext-yellow"><span data-feather="printer" class="text-secondary"></span></a>
                <a href="#" class="ntd me-4 hvtext-yellow"><span data-feather="edit-3" class="text-secondary"></span></a>
                <a href="#" class="ntd me-4 hvtext-yellow"><span data-feather="trash-2" class="text-secondary"></span></a>
            </div>
            <div class="border rounded bg-white shadow-sm p-4 d-flex flex-d-custom mb-2">
                <div class="image-container hw-100px bg-white border rounded me-4 mb-4 s100-50">
                    <img src="
                        <?php
                        if (file_exists($row['alumni_profile'])) {
                            echo $row['alumni_profile'];
                        } elseif (file_exists(str_replace("../../", "../" , $row['alumni_profile']))) {
                            echo str_replace("../../", "../" , $row['alumni_profile']);
                        } else {
                            echo str_replace("../../", "", $row['alumni_profile']);
                        }
                        ?>
                    " alt="">
                </div>
                <div>
                    <h5 class="color-black font-700 mb-4"><?php echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name']; ?></h5>
                    <div class="d-flex flex-d-custom">
                        <p class="color-black mb-2 me-2"><span data-feather="phone"></span><?php echo $row['contact_number'] ?></p>
                        <p class="color-black mb-2 me-2"><span data-feather="mail"></span><?php echo $row['email_address'] ?></p>
                        <p class="color-black mb-2 me-2"><span data-feather="map-pin"></span><?php echo $row['address'] ?></p>
                    </div>
                    <div class="d-flex flex-d-custom">
                        <p class="color-black mb-2 me-2"><span data-feather="map"></span>University of Northern Philippines</p>
                        <p class="color-black mb-2 me-2"><span data-feather="award"></span><?php echo $row['degree_earned'] ?></p>
                    </div>
                </div>
            </div>
            <div class="border rounded bg-white shadow-sm p-4">
                <p class="color-black font-700 tu">Personal Information</p>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Age:</p>
                    </div>
                    <p class="color-black"> <?php echo $row['age'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Sex:</p>
                    </div>
                    <p class="color-black"><?php echo $row['sex'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Civil Status:</p>
                    </div>
                    <p class="color-black"> <?php echo $row['civil_status'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Residence:</p>
                    </div>
                    <p class="color-black"><?php echo $row['residence'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Address:</p>
                    </div>
                    <p class="color-black"><?php echo $row['address'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Income Range:</p>
                    </div>
                    <p class="color-black"><?php echo $row['income_range'] ?></p>
                </div>
                <hr>
                <p class="color-black font-700 tu">Education</p>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Graduation Year:</p>
                    </div>
                    <p class="color-black"><?php echo $row['graduation_year'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Degree Earned:</p>
                    </div>
                    <p class="color-black"><?php echo $row['degree_earned'] ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Organizational Affiliation:</p>
                    </div>
                    <p class="color-black"><?php
                                            if (strpos($row['organizational_affiliation'], "/") !== false) {
                                                echo ltrim($row['organizational_affiliation'], "/");
                                            } else {
                                                echo $row['organizational_affiliation'];
                                            }
                                            ?></p>
                </div>
                <div class="d-flex">
                    <div class="col-2" style="min-width: 150px;">
                        <p class="color-black">Academic Awards:</p>
                    </div>
                    <p class="color-black"><?php
                                            if (strpos($row['academic_awards'], "/") !== false) {
                                                echo ltrim($row['academic_awards'], "/");
                                            } else {
                                                echo $row['academic_awards'];
                                            }
                                            ?></p>
                </div>
                <hr>
                <p class="color-black font-700 tu">Employment Status</p>
                <?php
                if ($row['employment_type'] === "Employed") {
                    $sql0 = "SELECT * FROM `employed_alumni` WHERE alumni_id = $id";
                    $result0 = $conn->query($sql0);
                    $row0 = $result0->fetch_assoc()
                ?>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Employer:</p>
                        </div>
                        <p class="color-black"> <?php echo $row0['employer_name'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Employer Address:</p>
                        </div>
                        <p class="color-black"><?php echo $row0['employer_address'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Position:</p>
                        </div>
                        <p class="color-black"> <?php echo $row0['present_position'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Type of Employment:</p>
                        </div>
                        <p class="color-black"><?php echo $row0['employment_type'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Salary Range:</p>
                        </div>
                        <p class="color-black"> <?php echo $row0['monthly_salary'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Field of Employment:</p>
                        </div>
                        <p class="color-black"><?php echo $row0['employment_field'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">Months employed:</p>
                        </div>
                        <p class="color-black"> <?php echo $row0['employment_months'] ?></p>
                    </div>
                    <div class="d-flex">
                        <div class="col-2" style="min-width: 150px;">
                            <p class="color-black">ICT Related?:</p>
                        </div>
                        <p class="color-black"><?php echo $row0['ict_related'] ?></p>
                    </div>
                <?php
                } elseif ($row['employment_type'] === "Unemployed") {
                ?>

                <?php
                } elseif ($row['employment_type'] === "Self-Employed") {
                ?>

                <?php
                } elseif ($row['employment_type'] === "Experienced Unemployed") {
                ?>

                <?php
                }
                ?>
            </div>
        </div>
    </main>
    <?php
    require_once "../includes/footer.php";
    ?>
    <script>
        document.title = "CCIT Alumni Details";
    </script>
</body>

</html>