<?php
require "style-link.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "../html/emp-login-form.html";
    ?>
    <div id="blur">
        <?php
        require "../html/script.html";
        require "includes/emp-nav.inc.php";
        ?>
        <main>
            <div class="bg-light position-relative">
                <div class="max-width-container position-relative" style="z-index: 1;">
                    <div class="row">
                        <div class="col-md-6 fontsize-13 mb-5">
                            <h1 class="font-700 mb-0 color-black mt-5">Hire with Precision. <br> Thrive with Passion.</h1>
                            <p class="color-black">Find the right person for your Company</p>
                            <p class="color-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam nulla laborum ducimus alias facere, adipisci officiis, soluta illo maiores</p>
                            <a href="#" class="btn btn-primary fontsize-13 font-500">Browse Registered Employers</a>
                        </div>
                        <div class="col-md-6">
                            <?php
                            require "includes/emp-signupform.inc.php";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light">
                <div class="max-width-container">
                    <div class="text-center color-black mb-5">
                        <h4 class="font-700 mb-0">Offers you more than just a Job</h4>
                        <p class="fontsize-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam odio eius soluta expedita excepturi</p>
                    </div>
                    <div class="row color-black">
                        <div class="col-md-6 mb-4">
                            <div class="image-container border rounded bg-white m-auto" style="height: 300px; width: 90%;">

                            </div>
                        </div>
                        <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                            <div class="" style="max-width: 500px;">
                                <h4 class="font-600 mb-2">Expose your Job Ad to millions of candidates</h4>
                                <p class="fontsize-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus necessitatibus assumenda optio aliquid, est nulla nesciunt nostrum atque porro, minus voluptatem architecto dignissimos? Dolorem nobis assumenda molestiae dolore amet accusamus.</p>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                            <div class="" style="max-width: 500px;">
                                <h4 class="font-600 mb-2">Expose your Job Ad to millions of candidates</h4>
                                <p class="fontsize-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus necessitatibus assumenda optio aliquid, est nulla nesciunt nostrum atque porro, minus voluptatem architecto dignissimos? Dolorem nobis assumenda molestiae dolore amet accusamus.</p>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container border rounded bg-white m-auto" style="height: 300px; width: 90%;">

                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container border rounded bg-white m-auto" style="height: 300px; width: 90%;">

                            </div>
                        </div>
                        <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                            <div class="" style="max-width: 500px;">
                                <h4 class="font-600 mb-2">Expose your Job Ad to millions of candidates</h4>
                                <p class="fontsize-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus necessitatibus assumenda optio aliquid, est nulla nesciunt nostrum atque porro, minus voluptatem architecto dignissimos? Dolorem nobis assumenda molestiae dolore amet accusamus.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
        require "../html/footer.html";
        ?>
        <script src="../javascript/functions.js"></script>
        <script src="../javascript/scroll.js"></script>
        <script src="../javascript/onclick.js"></script>
        <script src="../javascript/validations.js"></script>
        <script src="../javascript/jQueryRequest.js"></script>
        <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script>
            loadPage();
            feather.replace();

            function show_swal_validation_login(alert_text) {
                var swal_id = document.getElementById("swal2-validation-message02");
                swal_id.classList.remove("d-none");
                swal_id.innerHTML = alert_text;
            }
            
        </script>
    </div>
</body>

</html>