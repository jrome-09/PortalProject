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
    require "includes/nav.inc.php";
    ?>
    <main>
        <?php
        require "html/signup-form.html";
        ?>
        <div class="border rounded p-4 bg-white shadow-sm" id="result-modal">
            <div id="success-card" class="text-center">
                <h4 class="font-700 color-black">Sign up Successful</h4>
                <p class="fontsize-13 color-light">You have succesfully created your account. Please set up your profile.</p>
                <a href="#" class="btn btn-primary fontsize-14 font-500 py-2 px-4">Get Started</a>
            </div>
            <div class="text-center" id="failed-card">
                <h4 class="font-700 color-black">Sign up Failed!</h4>
                <p class="fontsize-13 color-light">Somethng went wrong during the signup process. Please refresh the page and try again.</p>
                <a href="#" class="btn btn-primary fontsize-14 font-500 py-2 px-4">Refresh Page.</a>
            </div>
            <?php
                require "html/ball-animation.html";
            ?>
        </div>

        <style>
            #result-modal {
                position: fixed;
                width: 400px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
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
        document.getElementById('signup-btn').classList.toggle('active');
    </script>

</body>

</html>
</body>