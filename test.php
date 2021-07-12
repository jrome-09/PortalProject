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
    <main>
        <div class="max-width-container">
            <form action="#" id="upload_form">
                <input type="file" class="form-control fontsize-14 mb-2" name="resume_file">
                <button type="button" class="btn btn-primary" id="btn-submit" name="file_btn">Submit</button>
            </form>
            <div id="result"">Result</div>
        </div>
        <script>
            $("#btn-submit").click(function() {
                var form = $('#upload_form')[0];
                var data = new FormData(form);
                $.ajax({
                    type: "POST",
                    enctype: "multipart/form-data",
                    url: "includes/formSubmit.inc.php",
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(e) {
                        $("#result").text(e.responseText);
                    }
                })
            });
        </script>
    </main>
    <script src="javascript/functions.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>