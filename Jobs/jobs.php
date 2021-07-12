<?php
require "job-head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <?php
    require "../html/script.html";
    require "../Candidate/candidate-navigation.php"
    ?>

    <main>
        <div class="background-thicker-light">
            <div class="max-width-container">
                <h4 class="mt-5 mb-4">Search for your Dream Job</h4>
                <form action="#">
                    <div class="d-flex align-items-center search-box-container">
                        <div class="input-group flex-nowrap me-1 mb-2">
                            <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                                <span data-feather="search" class="color-black"></span>
                            </div>
                            <input type="text" class="form-control border-start-0 fontsize-14" placeholder="Job Title...">
                        </div>
                        <div class="input-group flex-nowrap me-1 mb-2">
                            <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                                <span data-feather="map-pin" class="color-black"></span>
                            </div>
                            <input type="text" class="form-control fontsize-14 border-start-0" placeholder="Area/City or Town">
                        </div>
                        <div class="input-group mb-2">
                            <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                                <span data-feather="user" class="color-black"></span>
                            </div>
                            <select name="" id="searchSelect" class="form-select color-light border-start-0 fontsize-14">
                                <option selected>Specialization</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn btn-primary fontsize-14" type="button">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-light">
            <div class="max-width-container">
                <h5 class="color-black feather-20 mb-3 ms-2">Job Offers</h5>
                <div class="row" id="application-row-container">
                    <?php
                    require "../includes/db_connection.inc.php";
                    $sql = "SELECT * FROM `job_description`";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $highlights = explode("/", $row["job_highlights"]);
                    ?>
                        <div class="col-lg-4 pb-4" id="div_job0_<?php echo $row["_id"] ?>">
                            <a href="#" class="no-text-decor" id="btn-job0_<?php echo $row["_id"] ?>" onclick="job_submit(this.id)">
                                <div class="rounded p-4 bg-white shadow-sm-hover jobs bt-visible-primary-4 hover-bg-light position-relative">
                                    <div class="image-container d-inline-block border rounded mb-2 background-thicker-light" style="height: 60px; width: 60px;"></div>
                                    <span data-feather="bookmark" class="float-end hover-text-primary" style="height: 22px; width: 22px;"></span>
                                    <h6 class="mb-0 color-black"><?php echo $row["job_title"] ?></h6>
                                    <p class="fontsize-13 color-black mb-3"><?php echo $row["employer_name"] ?></p>
                                    <p class="fontsize-13 color-black m-0"><?php echo $row["job_address"] ?></p>
                                    <p class="fontsize-13 color-black mb-3 font-500"><?php echo $row["monthly_salary"] . "Monthly" ?></p>
                                    <ul class="mb-5">
                                        <li class="fontsize-13 color-black bullets"><?php echo $highlights[0]; ?></li>
                                        <li class="fontsize-13 color-black bullets"><?php echo $highlights[1]; ?></li>
                                    </ul>
                                    <p class="fontsize-13 color-light mb-0"><?php echo $row["job_type"] ?></p>
                                    <div class="position-absolute date-posted">
                                        <p class="font-super--small color-light m-0 text-end">Date Posted: <?php echo $row["date_posted"] ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="col-lg-4 pb-4" id="multiply-application">
                        <a href="job-details.php" class="no-text-decor">
                            <div class="rounded p-4 bg-white shadow-sm-hover jobs bt-visible-primary-4 hover-bg-light position-relative">
                                <div class="image-container d-inline-block border rounded mb-2 background-thicker-light" style="height: 60px; width: 60px;"></div>
                                <span data-feather="bookmark" class="float-end hover-text-primary" style="height: 22px; width: 22px;"></span>
                                <h6 class="mb-0 color-black">Software Developer</h6>
                                <p class="fontsize-13 color-black mb-3">Company Name</p>
                                <p class="fontsize-13 color-black m-0">Vigan City Ilocos Sur</p>
                                <p class="fontsize-13 color-black mb-3 font-500">PHP 20-30k Monthly</p>
                                <ul class="mb-5">
                                    <li class="fontsize-13 color-black bullets">Front End Development</li>
                                    <li class="fontsize-13 color-black bullets">Back End Development</li>
                                </ul>
                                <p class="fontsize-13 color-light mb-0">Type: Full Time</p>
                                <div class="position-absolute date-posted">
                                    <p class="font-super--small color-light m-0 text-end">Date Posted: 0/0/2021</p>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
                <script>
                    // for (i = 0; i < 8; i++) {
                    //     const Mydiv = document.getElementById("multiply-application");
                    //     var divclone = Mydiv.cloneNode(true);
                    //     var parentcon = document.getElementById("application-row-container");
                    //     parentcon.appendChild(divclone);
                    // }
                </script>

                <form action="job-details.php" id="job_form_submit" method="post">
                    <input type="hidden" id="form_job_input" name="job_input">
                </form>

                <div class="d-flex justify-content-end me-1">
                    <nav aria-label="...">
                        <ul class="pagination">
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
            </div>
        </div>
    </main>
    <?php
    require "../html/footer.html";
    ?>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.getElementById('jobs-link').classList.toggle('active');
        document.title = "CCIT | Job List";
        changeLink_inner();
    </script>
</body>

</html>