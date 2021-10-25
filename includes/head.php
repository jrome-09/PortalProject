<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        if (file_exists("css/main.css")) {
            echo '<link rel="stylesheet" href="css/main.css">';
        }else{
            echo '<link rel="stylesheet" href="../css/main.css">';
        }

        if (file_exists("css/style.css")) {
            echo '<link rel="stylesheet" href="css/style.css">';
        }else{
            echo '<link rel="stylesheet" href="../css/style.css">';
        }

        if (file_exists("css/global.css")) {
            echo '<link rel="stylesheet" href="css/global.css">';
        }else{
            echo '<link rel="stylesheet" href="../css/global.css">';
        }

        if (file_exists("css/mobile.css")) {
            echo '<link rel="stylesheet" href="css/mobile.css">';
        }else{
            echo '<link rel="stylesheet" href="../css/mobile.css">';
        }
        
    ?>
    <title>CCIT Alumni Tracing and Job Portal</title>
</head>