<?php
require "html/head.html";
?>

<body>
    <link rel="stylesheet" href="Alumni/index.css">
    <link rel="stylesheet" href="Candidate/candidate.css">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    session_start();
    require "html/script.html";
    if (isset($_SESSION["uemail"])) {
        require "Candidate/candidate-navigation.php";
    } else {
        require "includes/nav.inc.php";
    }

    ?>
    <main class="bg-light" style="padding-top: 100px;">
        <?php
        require "html/profile_setup03.html";
        ?>
    </main>
    <?php
    require "html/footer.html";
    ?>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/validations.js"></script>
    <script src="javascript/jQueryRequest.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace()
        changeLink();
        GetPositionList();
        GetSpecializationList();
        GetIndustryList();
        erase_input();
    </script>

</body>

</html>
</body>