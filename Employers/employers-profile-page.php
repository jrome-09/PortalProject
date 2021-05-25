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
    <?php
    require "../html/script.html";
    require "../Candidate/candidate-navigation.php"
    ?>
    <main>
        <div class="background-thicker-light" style="margin-top: 74px; height: 168px;">
            <div class="max-width-container " id="srch-mwidth">
                <div class="bg-white p-5 pt-4 shadow-sm">
                    <div class="text-end">
                        <p class="font-super--small color-light">Over 000 Employers</p>
                    </div>
                    <h6 class="font-500 color-black ">Search for an Employer or a Company</h6>
                    <div class="input-group color-black  flex-nowrap me-1" style="max-width: 600px;">
                        <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                            <span data-feather="user" class="color-black"></span>
                        </div>
                        <input type="text" class="form-control border-start-0 fontsize-14" placeholder="Employer or Company...">
                        <button class="btn btn-primary fontsize-14">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="max-width-container">
                <div class="row justify-content-center mt-5" id="emp-card-row">
                    <div class="col-sm-3 mb-4" id="emp-card-col" style="min-width: 270px;">
                        <div class="employer-card shadow-sm border rounded bg-white text-center" style="min-width: 260px;">
                            <div class="content p-4 fontsize-13">
                                <div class="image-container border rounded bg-light ms-auto me-auto" style="height: 90px; width: 90px;">

                                </div>
                                <h5 class="font-600">Jerome Cabrera</h5>
                                <p class="mb-0">Employer Position</p>
                                <div class="text-start mb-3">
                                    <hr class="mt-2">
                                    <p class="mb-1">Company: <span class="text-primary">Company Name</span></p>
                                    <p class="mb-1">Gender: Male</p>
                                    <p class="mb-1">Contact No.: 09876543211</p>
                                    <p class="mb-1">Joined: 2020</p>
                                </div>
                                <a href="employers-preview-page.php" type="button" class="btn btn-primary fontsize-13 font-500 px-5">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
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
            <style>
                .employer-card {
                    border-top: 5px solid #0d6efd !important;
                }

                #srch-mwidth {
                    position: absolute;
                    top: 6rem;
                    left: 50%;
                    transform: translate(-50%);
                }
            </style>
            <script>
                for (i = 0; i < 11; i++) {
                    const Mydiv = document.getElementById("emp-card-col");
                    var divclone = Mydiv.cloneNode(true);
                    var parentcon = document.getElementById("emp-card-row");
                    parentcon.appendChild(divclone);
                }
            </script>
    </main>
    <?php
    require "../Jobs/details.php";
    require "../html/footer.html";
    ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.getElementById('employer-prof-link').classList.toggle('active');
    </script>
</body>

</html>