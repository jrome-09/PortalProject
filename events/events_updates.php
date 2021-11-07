<?php
require_once "../includes/head.php";
?>

<body class="bg-light">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <?php
    require_once "../html/script.html";
    require "../includes/nav.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <main class="position-relative">
        <div class="max-width-container">
            <div class="border rounded p-4 py-3 bg-white shadow-sm mb-2">
                <div class="row">
                    <div class="col-md-6 color-black d-flex align-items-center font-500">
                        College Events and Updates
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
    require_once "../includes/footer.php";
    ?>
    <script>
        document.title = "CCIT Admin Dashboard";
        document.getElementById("events-link").classList.add('active')
        document.getElementById("events-link").classList.add('active')

        function show_option() {
            const title = 'Are you sure?'
            const text = "The message will be deleted and can't be recovered."
            const icon = 'warning'
            const cancel = true
            const confirmbtn_text = 'Yes! Delete'
            const confirmed_title = 'Success!'
            const confirmed_text = 'The message has been deleted.'
            const confirmed_icon = 'success'
            show_alert_options(title, text, icon, cancel, confirmbtn_text, confirmed_title, confirmed_text, confirmed_icon);
        }
    </script>
</body>

</html>