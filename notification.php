<?php
require "html/head.html";
if (isset($_GET['notif_id'])) {
    require_once "includes/db_connection.inc.php";
    $notification_id = str_replace("notification_", "", $_GET['notif_id']);
    $sql = "SELECT * FROM `notification` WHERE _id = $notification_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $status = 1;

    if ($row['status'] == 0) {
        $stmt = $conn->prepare("UPDATE `notification` SET `status`= ? WHERE _id = ?");
        $stmt->bind_param("ii", $status, $notification_id);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }


    $date_created = $row['date_created'];
    $message = $row['message'];
    $source_name = "CCIT Tracer";
    $source_type = array('System', 'Administrator', 'Employer', 'Jobseeker');
    $source = $source_type[$row['source_type']];

    if (strpos($message, '//') !== false) {
        $array = explode('//', $message);
        $message = $array[0] . " " . "<a href='" . $array[1] . "'>This form</a>" . " " . $array[2];
    }
}
?>

<body class="bg-light">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "html/script.html";
    require "includes/nav.php";
    ?>
    <main>
        <div class="max-width-container">
            <div class="bg-white border rounded p-4 shadow-sm mb-2">

            </div>
            <div class="border rounded shadow-sm bg-white position-relative">
                <div class="d-flex custom-row">
                    <div class="p-4 d-flex flex-column custom-col-1" style="width: 150px;">
                        <div class="image-container border rounded-circle hw-80px m-auto mt-0 mb-2 mobile-50">

                        </div>
                        <div>
                            <p class="text-yellow font-500 text-center m-0" id="source_name">----------</p>
                            <p class="bg-2 text-center rounded fontsize-n12 px-4 m-0" id="notification_source">--------</p>
                        </div>
                    </div>
                    <div class="p-4 border-start custom-col-2 position-relative">
                        <p class="mb-4 text-secondary fontsize-n12" id="notification_date">--/--/--</p>
                        <p class="color-black" id="notification_message">-----------------------------------</p>
                        <div class="p-5"></div>
                    </div>
                </div>
                <div class="col-absolute m-4">
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span data-feather="trash-2" class="color-black hvtext-yellow"></span></a>
                </div>
            </div>
        </div>
    </main>
    <style>
        @media screen and (max-width: 900px) {
            .custom-row {
                flex-direction: column;
            }

            .custom-col-1 {
                width: 100% !important;
                border-bottom: 1px solid #dee2e6 !important;
                flex-direction: row !important;
                align-items: center;
            }

            .custom-col-1 p.text-center {
                text-align: left !important;
            }

            .custom-col-1 div.image-container {
                margin: 0 !important;
                margin-right: .5rem !important;
            }

            .custom-col-2 {
                border: none !important;
            }


        }

        .col-absolute {
            position: absolute;
            bottom: 0;
            right: 0;
        }
    </style>
    <?php
    require "html/footer.html";
    ?>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/onclick.js"></script>
    <script src="javascript/jQueryRequest.js"></script>
    <script src="javascript/validations.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.title = "CCIT Alumni Tracing and Job Portal";
        <?php
        if (isset($_GET['notif_id'])) {
        ?>
            const date = document.getElementById('notification_date')
            const message = document.getElementById('notification_message')
            const source_name = document.getElementById('source_name')
            const source = document.getElementById('notification_source')
            date.innerHTML = "<?php echo $date_created; ?>"
            message.innerHTML = "<?php echo $message; ?>"
            source_name.innerHTML = "<?php echo $source_name; ?>"
            source.innerHTML = "<?php echo $source; ?>"
        <?php
        }
        ?>
    </script>
</body>

</html>