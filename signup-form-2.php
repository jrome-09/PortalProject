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
    require "navigation.php";
    ?>
    <main>
        <?php
        require "html/signup-form2.html";
        ?>
    </main>
    <?php
    require "html/footer.html";
    ?>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script>
        loadPage();
        changeColor();
        feather.replace()
        const nav_id = document.getElementById('nav-head');
        nav_id.classList.add("background-thicker-light");
        nav_id.classList.remove("background-blue");
    </script>

</body>

</html>
</body>