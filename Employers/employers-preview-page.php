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
        <style>
            @media screen and (max-width: 961px) {
                #header-infoflex {
                    flex-direction: column;
                }

                #infoflex-text {
                    margin: 0 !important;
                    margin-top: 1.5rem !important;
                }

                .con-con {
                    flex-direction: column;
                }

                .separator {
                    display: none !important;
                }
            }
        </style>
        <div class="bg-light" style="margin-top: 74px;">
            <div class="max-width-container">
                <div class="border rounded bg-white mb-3">
                    <div class="border-bottom p-4">
                        <div class="text-end">
                            <p class="font-super--small color-light mb-1">Last Updated: 00 Jan 2021</p>
                            <p class="text-success font-super--small bg-light d-inline-block rounded-pill p-1"><span data-feather="check" class="text-success"></span> Verified by the Admin</p>
                        </div>
                        <div class="d-flex" id="header-infoflex">
                            <div class="border bg-light image-container rounded hw-100px">

                            </div>
                            <div class="mt-1 ms-3" id="infoflex-text">
                                <h5 class="text-primary">Jerome Cabrera</h5>
                                <p class="fontsize-14 m-0 font-500 color-black">CEO(Employer Position)</p>
                                <p class="fontsize-14 font-500 color-black">Company Name</p>
                                <div class="d-flex con-con">
                                    <div class="mb-0 color-light fontsize-13 d-inline-block">
                                        <span data-feather="phone" class="color-light"></span>
                                        (+63) 9056275732
                                    </div>
                                    <p class="mx-2 d-inline-block mb-0 separator">|</p>
                                    <div class="mb-0 color-light fontsize-13 d-inline-block">
                                        <span data-feather="mail" class="color-light"></span>
                                        sampleemail@gmail.com
                                    </div>
                                    <p class="mx-2 d-inline-block mb-0 separator">|</p>
                                    <div class="mb-0 color-light fontsize-13 d-inline-block">
                                        <span data-feather="facebook" class="color-light"></span>
                                        samplefacebookemail@yahoo.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom p-4 color-black">
                        <p class="font-500">Employer Background</p>
                        <div class="d-flex mb-3 align-items-center">
                            <span data-feather="users" class="me-2"></span>
                            <h5 class="font-500 mb-0">Education</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <p class="m-0 color-light fontsize-13 font-500">Graduation Date: Jan 2021</p>
                            </div>
                            <div class="col-md-10">
                                <p class="fontsize-14 color-black font-500 m-0">University of the Northern Philippines</p>
                                <p class="fontsize-14 color-black font-500">Computer Science/Information Technology</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom p-4 color-black">
                        <div class="d-flex mb-3 align-items-center">
                            <span data-feather="users" class="me-2"></span>
                            <h5 class="font-500 mb-0">Employment Status</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <p class="m-0 color-light fontsize-13 font-500">Date Started: Jan 2021</p>
                            </div>
                            <div class="col-md-10 color-black">
                                <p class="fontsize-14 m-0">Position: CEO</p>
                                <p class="fontsize-14 m-0">Company Name: Company Name</p>
                                <p class="fontsize-14 m-0">Address: Vigan City Ilocos Sur</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 color-black">
                        <div class="d-flex mb-3 align-items-center">
                            <span data-feather="menu" class="me-2"></span>
                            <h5 class="font-500 mb-0">Aditional Info</h5>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <p class="color-light fontsize-13 mb-0">Address:</p>
                            </div>
                            <div class="col-lg-10">
                                <p class="color-black fontsize-14 mb-0">Vigan City Ilocos Sur</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <p class="color-light fontsize-13 mb-0">Gender:</p>
                            </div>
                            <div class="col-lg-10">
                                <p class="color-black fontsize-14 mb-0">Male</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <p class="color-light fontsize-13 mb-0">Address:</p>
                            </div>
                            <div class="col-lg-10">
                                <p class="color-black fontsize-14 mb-0">Vigan City Ilocos Sur</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2">
                                <p class="color-light fontsize-13 mb-0">Nationality:</p>
                            </div>
                            <div class="col-lg-10">
                                <p class="color-black fontsize-14 mb-0">Filipino</p>
                            </div>
                        </div>
                        <p class="color-black font-500 fontsize-14">Other Details</p>
                        <p class="color-black fontsize-13 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ab nihil provident odio porro doloremque molestias perferendis fuga temporibus iure et obcaecati reiciendis fugiat vero labore neque corporis, vitae ipsum?</p>
                    </div>
                </div>
                <div class="border rounded p-4 bg-white">
                    <p class="color-black font-500 fontsize-14">Posted Jobs</p>
                    <div class="row" id="application-row-container">
                        <div class="col-lg-4 pb-4" id="multiply-application">
                            <a href="../Jobs/job-details.php" class="no-text-decor">
                                <div class="rounded p-4 shadow-sm-hover jobs bt-visible-primary-4 hover-bg-light position-relative">
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
                    <script>
                        for (i = 0; i < 2; i++) {
						const Mydiv = document.getElementById("multiply-application");
						var divclone = Mydiv.cloneNode(true);
						var parentcon = document.getElementById("application-row-container");
						parentcon.appendChild(divclone);
					}
                    </script>
                </div>
            </div>
        </div>
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
    </script>
</body>

</html>