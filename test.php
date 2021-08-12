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
    <link rel="stylesheet" href="Alumni/index.css">
    <?php
    require "includes/nav.inc.php";
    ?>
    <main class="bg-light">
        <div class="max-width-container mt-5">
            <?php
            require "html/profile_setup03.html";
            ?>
        </div>
    </main>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/validations.js"></script>
    <script src="javascript/jQueryRequest.js"></script>
    <script>
        feather.replace();
        // GetTextList();
        // GetYearList();
        GetSpecializationList()
        GetPositionList()
        GetIndustryList()
    </script>
</body>

</html>