<?php
require "../html/head.html";
?>

<body>
    <link rel="stylesheet" href="candidate.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    require "../html/script.html";
    require "candidate-navigation.php"
    ?>
    <main>
        <div class="background-thicker-light">
            <div class="max-width-container">
                <h3 class="mt-5 mb-4">Search for your Dream Job</h3>
                <form action="#">
                    <div class="d-flex align-items-center">
                        <div class="input-group flex-nowrap me-1">
                            <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                                <span data-feather="search" class="color-black"></span>
                            </div>
                            <input type="text" class="form-control border-start-0 fontsize-14" placeholder="Job Title...">
                        </div>
                        <div class="input-group flex-nowrap me-1">
                            <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                                <span data-feather="map-pin" class="color-black"></span>
                            </div>
                            <input type="text" class="form-control fontsize-14 border-start-0" placeholder="Area/City or Town">
                        </div>
                        <div class="input-group">
                            <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                                <span data-feather="user" class="color-black"></span>
                            </div>
                            <select name="" id="searchSelect" class="form-select color-light border-start-0 fontsize-14">
                                <option selected>Specialization</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn btn-primary" type="button">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-width-container">
                <h5 class="color-black feather-20 mb-3">Job Offers</h5>
                <a href="#" class="no-text-decor">
                    <div class="rounded p-4 mb-2 shadow-sm-hover jobs bt-visible-primary-4 hover-bg-light">
                        <div class="image-container d-inline-block border round mb-3" style="height: 50px; width: 50px;"></div>
                        <span data-feather="bookmark" class="float-end hover-text-primary" style="height: 22px; width: 22px;"></span>
                        <h6 class="mb-0 color-black">Software Developer</h6>
                        <p class="fontsize-13 color-black mb-3">Company Name</p>
                        <p class="fontsize-13 color-black m-0">Vigan City Ilocos Sur</p>
                        <p class="fontsize-13 color-black mb-3 font-500">PHP 20-30k Monthly</p>
                        <ul>
                            <li class="fontsize-13 color-black bullets">Front End Development</li>
                            <li class="fontsize-13 color-black bullets">Back End Development</li>
                        </ul>
                        <p class="font-super--small color-light m-0 text-end">Date Posted: 0/0/2021</p>

                    </div>
                </a>
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
        feather.replace();
    </script>
</body>

</html>