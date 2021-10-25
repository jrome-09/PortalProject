<?php
require_once "../includes/head.php";
?>

<body class="bg-light">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <?php
    require_once "../html/script.html";
    require "../includes/nav.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <main>
        <div class="max-width-container">
            <div class="border rounded bg-white shadow-sm m-auto" style="width: 100%; max-width: 400px;">
                <main class="p-4 border-bottom">
                    <h2 class="color-black font-700 fontsize-24 mb-4 text-center">Admin Login</h2>
                    <p class="color-black text-center fontsize-13">login as the admin</p>
                    <form action="#" id="admin_loginform">
                        <input type="hidden" name="admin_login" value="undefined">
                        <label for="admin_username" class="required text-secondary text-start">Username</label>
                        <input type="text" class="form-control mb-2" id="admin_username" name="admin_username">

                        <label for="admin_password" class="required text-secondary text-start">Password</label>
                        <input type="password" class="form-control mb-3" id="admin_password" name="admin_password">
                        <div id="swal2-validation-message-adlog" class="swal2-validation-message d-none mb-3 text-center"></div>
                        <div class="m-auto d-flex justify-content-center">
                            <button type="button" class="btn bg-2 px-5" onclick="validate_adminlogin()">Login</button>
                        </div>
                    </form>
                </main>
                <footer class="p-4">

                </footer>
            </div>

        </div>
    </main>
    <?php
    require_once "../includes/footer.php";
    ?>
    <script>
        document.title = "CCIT Admin login";

        function validate_adminlogin() {
            const result = validate_form("admin_loginform")
            if (result) {
                hide_swal_validation02('swal2-validation-message-adlog');
                $.post(
                    "../includes/login.inc.php",
                    $("#admin_loginform").serialize(),
                    function(data) {
                        if (data == "invalid username." || data == "wrong password.") {
                            console.log(data)
                            show_swal_validation02('swal2-validation-message-adlog', "Invalid username or password.");
                        }
                        else if(data === "logged in.") {
                            console.log(data)
                            hide_swal_validation02('swal2-validation-message-adlog');
                            window.location = "page.php"
                        }
                    }
                );
            } else {
                show_swal_validation02('swal2-validation-message-adlog', "Please input your username and password.");
            }
        }
    </script>
</body>

</html>