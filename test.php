<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the test Page</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <?php
    require "html/script.html";
    ?>
</head>

<body>
    <div class="max-width-container">
        <button type="button" class="btn btn-success fontsize-13 font-500" onclick="success_click()">Success Alert</button>
        <button type="button" class="btn btn-danger fontsize-13 font-500">Danger Alert</button>
        <button type="button" class="btn btn-primary fontsize-13 font-500">Job Applied Alert</button>
    </div>
    <script src="javascript/functions.js"></script>
    <script>
        function success_click() {
            Swal.fire({
                icon: 'error',
                title: 'Upload Error!',
                text: "Please check your file and send it again",
                confirmButtonText: 'Close',
                // showCancelButton: true,
                // cancelButtonColor: '#d33',
                // cancelButtonText: 'No!'

            })
        }
        feather.replace();
    </script>
</body>

</html>