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
    //require "../html/emp-login-form.html";
    require "../includes/nav.php";
    require "../html/script.html";
    ?>
    <main>
        <div class="bg-light position-relative">
            <div class="max-width-container position-relative" style="z-index: 1;">
                <div class="row">
                    <div class="col-md-6 fontsize-13 mb-5">
                        <h1 class="font-700 mb-0 color-black mt-5">Hire with Precision. <br> Thrive with Passion.</h1>
                        <p class="color-black">Find the right person for your Company</p>
                        <p class="color-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam nulla laborum ducimus alias facere, adipisci officiis, soluta illo maiores</p>
                        <a href="#" class="btn bg-cp2 fontsize-13 font-500">Browse Registered Employers</a>
                    </div>
                    <div class="col-md-6">
                        <?php
                        require "includes/emp-signupform.inc.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="max-width-container">
                <div class="text-center color-black mb-5">
                    <h4 class="font-700 mb-0">Offers you more than just a Job</h4>
                    <p class="fontsize-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam odio eius soluta expedita excepturi</p>
                </div>
                <div class="row color-black">
                    <div class="col-md-6 mb-4">
                        <div class="image-container border rounded bg-white m-auto" style="height: 300px; width: 90%;">

                        </div>
                    </div>
                    <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                        <div class="" style="max-width: 500px;">
                            <h4 class="font-600 mb-2">Expose your Job Ad to millions of candidates</h4>
                            <p class="fontsize-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus necessitatibus assumenda optio aliquid, est nulla nesciunt nostrum atque porro, minus voluptatem architecto dignissimos? Dolorem nobis assumenda molestiae dolore amet accusamus.</p>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                        <div class="" style="max-width: 500px;">
                            <h4 class="font-600 mb-2">Expose your Job Ad to millions of candidates</h4>
                            <p class="fontsize-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus necessitatibus assumenda optio aliquid, est nulla nesciunt nostrum atque porro, minus voluptatem architecto dignissimos? Dolorem nobis assumenda molestiae dolore amet accusamus.</p>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="image-container border rounded bg-white m-auto" style="height: 300px; width: 90%;">

                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="image-container border rounded bg-white m-auto" style="height: 300px; width: 90%;">

                        </div>
                    </div>
                    <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
                        <div class="" style="max-width: 500px;">
                            <h4 class="font-600 mb-2">Expose your Job Ad to millions of candidates</h4>
                            <p class="fontsize-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus necessitatibus assumenda optio aliquid, est nulla nesciunt nostrum atque porro, minus voluptatem architecto dignissimos? Dolorem nobis assumenda molestiae dolore amet accusamus.</p>
                        </div>

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
    <script src="../javascript/validations.js"></script>
    <script src="../javascript/jQueryRequest.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace();

        function show_swal_validation_login(alert_text) {
            var swal_id = document.getElementById("swal2-validation-message02");
            swal_id.classList.remove("d-none");
            swal_id.innerHTML = alert_text;
        }
        document.getElementById('web-id').href = "../index.php"
        document.getElementById('index-link').href = "../index.php"
        document.getElementById('lgn-btn').onclick = show_emp_login;

        function show_emp_login() {
            var data = '<p class="fontsize-13 color-black text-center">Enter your registered email and password.</p>' +
                '<form action="#" id="login_form">' +
                '<input type="hidden" name="employer_login">' +
                '<label for="login--email" class="required color-light text-start">Email Address</label>' +
                '<input type="text" name="login_email-emp" class="form-control fontsize-13 mb-2" id="login--email">' +
                '<label for="login-password" class="required color-light text-start" >Password</label>' +
                '<input type="password" name="login_password" class="form-control fontsize-13" id="login-password">' +
                '</form>' +
                '<div class="swal2-validation-message fontsize-13 d-none mb-2" id="swal3-validation-message" style="display: flex;"></div>'
            Swal.fire({
                title: 'Employer Login',
                html: data,
                showCancelButton: true,
                confirmButtonText: 'Log in',
                footer: '<p class="font-small text-center color-black m-0 mt-3">New User? <a href="signup-form.php">Sign up now</a></p>',
                preConfirm: function validation() {
                    const dir = "<?php echo $directory; ?>";
                    <?php
                    if (file_exists('Employers/employer-page.php')) {
                        $log_directory = 'Employers/employer-page.php';
                    } else {
                        $log_directory = '../Employers/employer-page.php';
                    }
                    ?>
                    const log_dir = "<?php echo $log_directory; ?>";
                    validate_emp_login(dir, log_dir)
                    return false;
                },
                customClass: {
                    popup: "me-17px swal-width-400 font-poppins",
                    title: "color-black font-700 fontsize-24 mb-4",
                    htmlContainer: "color-light pt-0 fontsize-13",
                    confirmButton: "btn bg-cp2 px-4 fontsize-13 font-500",
                    cancelButton: "btn px-4 fontsize-13 font-500",
                    footer: "py-1"
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    return false;
                }
            })
        }
    </script>
</body>

</html>