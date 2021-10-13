<?php
require "forum-head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "../html/script.html";
    require "../includes/nav.php";
    ?>
    <main class="bg-light">
        <div class="max-width-container">
            <div class="border rounded p-4 py-3 bg-white shadow-sm mb-2">
                <div class="row">
                    <div class="col-md-6 color-black d-flex align-items-center font-500">
                        0 Post/s
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#" class="btn bg-2"><span data-feather="edit" class="me-2"></span>Post a Thread</a>
                    </div>
                </div>
            </div>
            <div class="border rounded p-4 bg-white shadow-sm mb-2">
                <div class="max-width-container">
                    <div class="image-container mb-4" style="height: 100px;">
                        <img src="../images/svg/undraw_setup.svg" alt="">
                    </div>
                    <p class="text-center">No Data Found</p>
                </div>
            </div>
        </div>
    </main>
    <?php
    require "../html/footer.html";
    ?>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../javascript/validations.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.title = "CCIT Alumni Tracing and Job Portal";
        var parent = document.getElementById('forum-link').classList.add('active');
    </script>
</body>

</html>