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
        <div class="background-thicker-light pt-5">
            <br>
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
                <div class="border bg-white p-4 rounded mb-5 border-left-primary-2">
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
                <div class="border p-4 rounded bg-white">
                    <h5 class="color-black feather-20"><span data-feather="bookmark"></span> Saved Jobs</h5>
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
                    </a>
                    <div class="text-end mt-4">
                        <a href="bookmarks.php" type="button" class="btn btn-primary font-500 fontsize-14">Open Bookmarks</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <?php
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
        document.getElementById('mypage-link').classList.toggle('active');
        document.title = "Candidate | Homepage"
    </script>
</body>

</html>