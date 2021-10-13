<?php
require "style-link.html";



?>

<body>
    <?php
    require "../html/script.html";
    require '../includes/nav.php';

    $c_id = str_replace("company_", "", $_POST['company_id']);

    $c_sql = "SELECT * FROM `employer_details` WHERE _id = $c_id;";
    $c_row =  mysqli_fetch_array($conn->query($c_sql));
    $e_name = $c_row['first_name'] . " " . $c_row['middle_name'] . " " . $c_row['last_name'];
    ?>

    <main class="bg-light">
        <div class="max-width-container">
            <div class="p-4 border bg-white rounded d-flex align-items-center mb-2">
                <div class="image-container hw-100px border bg-white rounded me-2">
                    <img src="<?php echo $c_row['company_logo']; ?>" alt="">
                </div>
                <div>
                    <h4 class="color-black font-500"><?php echo $c_row['company_name'] ?></h4>
                    <p class="fontsize-13 color-light">Something to say</p>
                    <p class="fontsize-13 color-light mb-0 ">Employer: <span class="tu"><?php echo $e_name; ?></span></p>
                </div>
            </div>
            <div class="border rounded p-4 bg-white">
                <div class="color-black fontsize-13 font-700 mb-3">Contact Details:</div>
                <div class="ps-2 color-black">
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="fontsize-13 mb-2">Contact number:</p>
                        </div>
                        <div class="col-sm-10">
                            <p class="fontsize-13 mb-2 tu"><?php echo $c_row['contact_number']; ?></p>
                        </div>
                        <div class="col-sm-2">
                            <p class="fontsize-13 mb-2">Email Address:</p>
                        </div>
                        <div class="col-sm-10">
                            <p class="fontsize-13 mb-2 tu"><?php echo $c_row['email_address']; ?></p>
                        </div>
                        <div class="col-sm-2">
                            <p class="fontsize-13 mb-2">Company Address:</p>
                        </div>
                        <div class="col-sm-10">
                            <p class="fontsize-13 mb-2 tu"><?php echo $c_row['company_address']; ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="fontsize-13 color-black font-700">Company Overview</p>
                <p class="fontsize-13 color-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat nulla accusamus, deserunt cum corporis placeat mollitia dolorum et obcaecati unde
                    iure maiores. Ipsum aliquam quis quisquam iusto, alias itaque vero. Lorem ipsum dolor, sit
                    amet consectetur adipisicing elit. Magnam, natus fugiat inventore sunt ea magni molestiae
                    nemo ex voluptatibus incidunt ut vitae necessitatibus nihil architecto ullam facere dolorem
                    deleniti iure!
                </p>
                <p class="fontsize-13 color-black font-700">Why you should join us?</p>
                <p class="fontsize-13 color-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat nulla accusamus, deserunt cum corporis placeat mollitia dolorum et obcaecati unde
                    iure maiores. Ipsum aliquam quis quisquam iusto, alias itaque vero. Lorem ipsum dolor, sit
                    amet consectetur adipisicing elit. Magnam, natus fugiat inventore sunt ea magni molestiae
                    nemo ex voluptatibus incidunt ut vitae necessitatibus nihil architecto ullam facere dolorem
                    deleniti iure!
                </p>
                <hr>
                <br>


                <div class="row" id="application-row-container">
                    <?php
                    //require "../includes/db_connection.inc.php";
                    $sql = "SELECT * FROM `job_description` WHERE employer_id = $c_id";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $eid = $row['employer_id'];
                        $data = get_emp($conn, $eid);
                    ?>
                        <div class="col-lg-4 pb-4" id="div_job0_<?php echo $row["_id"] ?>">
                            <div class="rounded p-4 bg-white shadow-sm-hover jobs bt-cp2-4 border-end border-bottom border-start position-relative">
                                <span data-feather="bookmark" class="float-end htl-cp1" style="height: 22px; width: 22px;"></span>
                                <a href="#" class="no-text-decor" id="btn-job0_<?php echo $row["_id"] ?>" onclick="job_submit(this.id)">
                                    <h6 class="mb-0 color-black text-primary"><?php echo $row["job_title"] ?></h6>
                                    <p class="fontsize-13 color-black mb-3"><?php echo $row["employer_name"] ?></p>
                                    <p class="fontsize-13 color-black m-0"><?php echo $row["job_address"] ?></p>
                                    <p class="fontsize-13 color-black mb-3 font-500"><?php echo "Salary Range: PHP " . $row["salary_range"]; ?></p>
                                    <p class=""></p>
                                    <p class="fontsize-13 color-light mb-0"><?php echo $row["job_type"] ?></p>
                                    <div class="position-absolute date-posted">
                                        <p class="font-super--small color-light m-0 text-end">Date Posted: <?php echo $row["date_posted"] ?></p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    <?php
                    }
                    ?>
                </div>

                <form action="../Jobs/job-details.php" id="job_form_submit" method="post">
                    <input type="hidden" id="form_job_input" name="job_input">
                </form>


            </div>
        </div>
    </main>
    <?php
    require "../html/footer.html";
    ?>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../javascript/validations.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.title = "CCIT | Employer List"
        document.getElementById('web-id').href = "../index.php"
        document.getElementById('index-link').href = "../index.php"
        var parent = document.getElementById('employer-prof-link').parentElement
        parent.classList.add('active');
    </script>
</body>

</html>