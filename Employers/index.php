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
        require "employer-navigation.php";
        ?>
        <main>
            <div class="bg-light pt-5 ">
                <div class="max-width-container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Hello</h2>
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