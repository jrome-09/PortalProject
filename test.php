<?php
require "html/head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "html/script.html";
    //require "includes/nav.inc.php";
    require "includes/nav.php";
    ?>
    <main>
        <div class="max-width-container">
            <div class="border rounded shadow-sm p-4">
                <form action="#" id="notification_form">
                    <label for="label" class="required color-black mb-2">Link</label>
                    <input type="text" class="form-control mb-5" id="label">
                    <button type="button" class="btn bg-2 px-4">Insert</button>
                </form>
            </div>
        </div>
    </main>
    <?php
    require "html/footer.html";
    ?>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/jQueryRequest.js"></script>
    <script src="javascript/validations.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.title = "CCIT Alumni Tracing and Job Portal";
        var parent = document.getElementById('index-link').classList.add('active');
    </script>
</body>

</html>