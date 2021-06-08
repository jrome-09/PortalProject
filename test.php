<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the test Page</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

    <?php
        require "html/script.html";
    ?>
</head>
<body>
    <div class="max-width-container d-flex justify-content-center text-center flex-column">
        <label for="autocomplete" class="font-500 fontsize-13 color-black">Input Search</label>
        <input type="text" name="address" id="autocomplete" class="form-control fontsize-14" placeholder="Location...">
    </div>
</body>
</html>