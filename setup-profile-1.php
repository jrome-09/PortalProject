<?php
// session_start();
// if (!isset($_SESSION["uemail"])) {
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
    require "html/script.html";
    require "includes/nav.php";
    ?>
    <main class="bg-light">
        <div class="max-width-container">
            <?php
            require "html/profile_setup02.html";
            require "html/ball-animation.html"
            ?>
        </div>
    </main>
    <?php
    require "html/footer.html";
    ?>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/validations.js"></script>
    <script src="javascript/jQueryRequest.js"></script>
    <script>
        loadPage();
        feather.replace()
        GetTextList();
        GetYearList();
    </script>

</body>

</html>
</body>

<?php
// } else {
//     header("location: index.php");
// }
?>