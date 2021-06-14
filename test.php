<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the test Page</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <?php
    require "html/script.html";
    ?>
</head>

<body>
    <div class="max-width-container">
        <div id="dropdown-container">
            <div class="form-control mb-1" onclick="showList()">
                <span class="color-black fontsize-13" id="control-selected">Selected</span>
                <span data-feather="chevron-down" class="color-black"></span>
            </div>

            <div class="option-container border rounded shadow-sm" id="options">
                <ul class="p-2 color-black fontsize-13" id="list__ul">
                    <li class="p-2 rounded" id="AdvertisingMedia" onclick="optionSelect(this.id)">Advertising Media</li>
                </ul>
            </div>
        </div>
        <style>
            #dropdown-container .form-control{
                width: 100%;
                min-height: 35px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .option-container {
                max-height: 300px;
                overflow-y: scroll;
                visibility: hidden;
                opacity: 0;
                transition: 0.2s;
            }

            .option-container.active{
                visibility: visible;
                opacity: 1;
                transition: 0.2s;
            }

            .option-container ul li:hover {
                background-color: #f8f9fa !important;
            }
        </style>
    </div>
    <script src="javascript/functions.js"></script>
    <script>
        GetTextList()
        feather.replace();
    </script>
</body>

</html>