<?php
require "forum-head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <link rel="stylesheet" href="../Candidate/candidate.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    require "../html/script.html";
    session_start();
    if (isset($_SESSION["username"])) {
        require "../Candidate/candidate-navigation.php";
    } else {
        require "../includes/nav.inc.php";
    }
    ?>

    <main>
        <?php
        require "forum.inc.php";
        ?>
    </main>

    <?php
    require "../html/footer.html";
    ?>
    </div>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace();

        <?php
        if (isset($_SESSION['username'])) {
        ?>
            document.getElementById('forum-link').classList.toggle('active');
        <?php
        } else {
        ?>
            document.getElementById('web-id').href = "../index.php"
            document.getElementById('index-link').href = "../index.php"
            document.getElementById('about-link').href = "../about.php"
            document.getElementById('contacts-link').href = "../contacts.php"
            document.getElementById('alumni-link').href = "../Alumni/alumni-index.php"
            document.getElementById('emp-profiles-link').href = "../Employers/employers-profile-page.php"
            document.getElementById('jobs-link-out').href = "#"
            document.getElementById('forum-link').href = "../Forum/forum-index.php"
            document.getElementById('signup-btn').href = "../signup-form.php"
            document.getElementById('login-btn').href = "../candidate-login-form.php"
            document.getElementById('for_emp').href = "../Employers/index.php"
            document.getElementById('nav-stylesheet').href = "../css/index-nav.css"
        <?php
        }
        ?>
        document.title = "CCIT | Forum";
    </script>
</body>

</html>