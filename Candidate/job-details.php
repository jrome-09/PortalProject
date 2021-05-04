<?php
require "../html/head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <link rel="stylesheet" href="candidate.css">
    <?php
    require "../html/script.html";
    require "candidate-navigation.php"
    ?>
    <main>
        <div class="bg-light pt-5">
            <div class="max-width-container">
                <div class="border p-4 bg-white rounded">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="image-container rounded border bg-light mb-2" style="height: 70px; width: 70px;"></div>
                            <h5 class="color-black mb-0">Software Developer</h5>
                            <p class="color-black fontsize-14">Company Name</p>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center align-items-center">
                            <a href="#" type="button" class="btn btn-primary fontsize-14">Apply Now</a>
                            <a href="#" type="button" class="btn btn-light border fontsize-14 color-black">Add to Bookmarks</a>
                        </div>
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
    </script>
</body>

</html>