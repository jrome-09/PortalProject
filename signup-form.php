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
    require "includes/nav.php";
    ?>
    <main class="bg-light">
        <div class="max-width-container">
            <div class="row">
                <div class="col-md-6 position-relative">
                    <?php
                    require "html/signup-form.html";
                    require "html/ball-animation.html"
                    ?>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="image-container overflow-visible" style="height: 400px; width: 400px;">
                        <img src="Images/svg/undraw_access.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="border rounded p-4 bg-white shadow-sm" id="result-modal">
            <div id="success-card" class="text-center">
                <div class="swal2-success-ring"></div>
                <h4 class="font-700 color-black">Sign up Successful</h4>
                <p class="fontsize-13 color-light">You have succesfully created your account. Please set up your profile.</p>
                <a href="#" class="btn btn-primary fontsize-14 font-500 py-2 px-4">Get Started</a>
            </div>
            <div class="text-center" id="failed-card">
                <h4 class="font-700 color-black">Sign up Failed!</h4>
                <p class="fontsize-13 color-light">Somethng went wrong during the signup process. Please refresh the page and try again.</p>
                <a href="#" class="btn btn-primary fontsize-14 font-500 py-2 px-4">Refresh Page.</a>
            </div>
        </div>
        <style>
            #result-modal {
                position: fixed;
                width: 400px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style> -->
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
        const link = document.getElementById('reg-link')
        link.classList.remove('decor-none', 'text-white')
        link.classList.add('text-yellow')
        const span = document.getElementById('reg-span')
        span.classList.add('text-yellow')
        span.classList.remove('text-white')
    </script>

</body>

</html>
</body>