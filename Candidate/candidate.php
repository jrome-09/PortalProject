<?php
require "candidate-head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <?php
    require "../html/script.html";
    require "candidate-navigation.php"
    ?>
    <main>
        <div class="background-thicker-light pt-5 position-relative">
            <div class="bg-image position-absolute top-0 left-0"></div>
            <br>
            <div class="max-width-container position-relative">
                <h4 class="mt-5 mb-4">Search for your Dream Job</h4>
                <?php
                require "../html/search-form.html";
                ?>
            </div>
        </div>
        <div class="bg-light">
            <div class="max-width-container">
                <div class="border bg-white p-4 rounded mb-5 border-left-primary-2 shadow-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="color-black">Welcome Username</h5>
                            <a href="#" class="no-text-decor color-black fontsize-13 hover-text-primary hover-text-feather"><span data-feather="settings"></span>Update your Profile</a>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <ul>
                                <li class="d-inline-block">
                                    <a href="#" class="color-black fontsize-14 hover-text-primary hover-text-feather px-3"><span data-feather="bookmark"></span> Saved Jobs</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="#" class="color-black fontsize-14 hover-text-primary hover-text-feather px-3"><span data-feather="activity"></span> Job Applications</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="#" class="color-black fontsize-14 hover-text-primary hover-text-feather px-3"><span data-feather="bell"></span> Alerts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border rounded bg-white position-relative overflow-hidden shadow-sm">
                    <header class="bg-light p-4 border-bottom">
                        <div class="color-black d-flex align-items-center"><span data-feather="bookmark"></span>
                            <h5 class="color-black m-0">Saved Jobs</h5>
                        </div>
                    </header>
                    <main class="p-4">
                        <div class="hw-100pcent text-center p-4">
                            <div class="image-container hw-100pcent mb-2" style="height: 200px; max-height: 200px;">
                                <img src="../Images/svg/undraw_save.svg" alt="" style="filter: opacity(90%); height: 100%;">
                            </div>
                            <div style="max-width: 220px;" class="text-center m-auto">
                                <p class="fontsize-13 color-black">Use the bookmark icon <span data-feather="bookmark" class="text-primary"></span> to save jobs that interest you.</p>
                            </div>
                        </div>
                        <!-- <h5 class="color-black feather-20"><span data-feather="bookmark"></span> Saved Jobs</h5>
                    <a href="#" class="no-text-decor">
                        <div class="border rounded p-4 d-flex align-items-center mb-2 shadow-sm-hover border-left-hover">
                            <div class="image-container background-thicker-light border round min-50" style="height: 50px; width: 50px;"></div>
                            <div class="ps-2 flex-fill">
                                <h6 class="m-0 color-black">Software Developer</h6>
                                <p class="fontsize-13 color-light m-0">Company Name</p>
                            </div>
                            <p class="font-super--small color-light m-0 align-self-end">Date Posted: 0/0/2021</p>
                        </div>
                    </a>
                    <a href="#" class="no-text-decor">
                        <div class="border rounded p-4 d-flex align-items-center mb-2 shadow-sm-hover border-left-hover">
                            <div class="image-container background-thicker-light border round min-50" style="height: 50px; width: 50px;"></div>
                            <div class="ps-2 flex-fill">
                                <h6 class="m-0 color-black">Front End Developer</h6>
                                <p class="fontsize-13 color-light m-0">Company Name</p>
                            </div>
                            <p class="font-super--small color-light m-0 align-self-end">Date Posted: 0/0/2021</p>
                        </div>
                    </a>
                    <a href="#" class="no-text-decor">
                        <div class="border rounded p-4 d-flex align-items-center mb-2 shadow-sm-hover border-left-hover">
                            <div class="image-container background-thicker-light border round min-50" style="height: 50px; width: 50px;"></div>
                            <div class="ps-2 flex-fill">
                                <h6 class="m-0 color-black">Back End Developer</h6>
                                <p class="fontsize-13 color-light m-0">Company Name</p>
                            </div>
                            <p class="font-super--small color-light m-0 align-self-end">Date Posted: 0/0/2021</p>
                        </div>
                    </a> -->
                        <div class="text-end mt-4">
                            <a href="bookmarks.php" type="button" class="btn btn-primary font-500 fontsize-13">Open Bookmarks</a>
                        </div>
                    </main>
                </div>

            </div>
        </div>
    </main>
    <?php
    require "../html/footer.html";
    ?>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.getElementById('mypage-link').classList.toggle('active');
        document.title = "Candidate | Homepage";
        GetSpecializationList_inner();
    </script>
</body>

</html>