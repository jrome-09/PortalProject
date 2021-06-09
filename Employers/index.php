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
                        <div class="col-md-6">
                            <?php
                            require "includes/emp-signupform.inc.php";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="background-thicker-light thick-container">
                    <style>
                        .thick-container {
                            position: absolute;
                            top: 0;
                            left: 0;
                            height: 450px;
                            width: 100%;
                            z-index: 0;
                        }
                    </style>
                </div>
            </div>
            <div class="background-thicker-light">
                <div class="max-width-container">
                    <div class="row my-5">
                        <div class="col-md-6 fontsize-14">
                            <h2 class="font-700 mb-0 color-black">Hire with Precision.</h2>
                            <p class="color-black">Find the right person for your Company</p>
                            <p class="color-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam nulla laborum ducimus alias facere, adipisci officiis, soluta illo maiores</p>
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
                            <div class="image-container border rounded bg-white" style="height: 300px; width: 90%;">

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
                            <div class="image-container border rounded bg-white" style="height: 300px; width: 90%;">

                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container border rounded bg-white" style="height: 300px; width: 90%;">

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
        <script>
            loadPage();
            feather.replace();
        </script>
    </div>
</body>

</html>