<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the test Page</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <?php
    require "html/script.html";
    ?>
</head>

<body>
    <div class="max-width-container">
        <div class="btn btn-primary" id="btnalert">
            Click me!
        </div>

        <script>
            $('#btnalert').click(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sign up Sucessful!',
                    text: 'You have succesfully created your account. Please set up your profile.',
                    confirmButtonText: 'Get Started'
                })
            });
            document.getElementsByClassName("swal2-confirm").innerHTML = "Get Started";
        </script>
        <style>
            .swal2-popup {
                width: 400px;
            }

            .swal2-title {
                color: rgb(54, 61, 71) !important;
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 8px !important;
                font-family: 'Poppins', sans-serif
            }

            .swal2-html-container {
                color: #69707a !important;
                padding-top: 0 !important;
                font-size: 13px !important;
            }

            .swal2-styled.swal2-confirm:hover {
                color: #fff;
                background-color: #0d6efd;
                border-color: #0d6efd;
            }

            .swal2-styled.swal2-confirm {
                background-color: #0d6efd !important;
            }
        </style>

    </div>
</body>

</html>