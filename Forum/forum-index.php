<?php
require "../html/head.html";
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
    <link rel="stylesheet" href="index.css">
    <?php
    require "../html/script.html";
    require "../Candidate/candidate-navigation.php"
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
    <script>
        loadPage();
        feather.replace();
        document.getElementById('forum-link').classList.toggle('active');
    </script>
</body>

</html>