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
        <div class="bg-light">
            <div class="max-width-container margin-top-nav">
                <div class="px-4 py-2 border background-thicker-light rounded mb-2">
                    <a href="forum-index.php" class="color-black font-500 fontsize-14 text-decoration-none hover-text-primary">Forum</a>
                    <span data-feather="chevron-right"></span>
                    <a href="#" class="text-primary font-500 fontsize-14">Thread Name or Title</a>
                </div>
                <div class="p-4 background-thicker-light color-black d-flex align-items-center justify-content-between border rounded">
                    <p class="mb-0 font-500 fontsize-14">New Posts</p>
                    <a href="#" type="button" class="btn btn-primary px-4 fontsize-14 font-500">
                        <span data-feather="edit" class="color-white" style="margin-bottom: 0.10rem;"></span>
                        Post Thread
                    </a>
                </div>
            </div>

        </div>
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