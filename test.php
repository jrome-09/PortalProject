<?php
require "html/head.html";
?>

<body class="bg-light">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "html/script.html";
    //require "includes/nav.inc.php";
    require "includes/nav.php";
    ?>
    <main>
        <div class="max-width-container">
            <div class="border rounded shadow-sm p-4 mb-2">
                <form action="#" id="notification_form">
                    <input type="hidden" name="notification_input">
                    <input type="hidden" name="source" value="0">
                    <input type="hidden" name="source_id" value="0">
                    <input type="hidden" name="receiver" value="1">
                    <input type="hidden" name="receiver_id" value="1">
                    <label for="label" class="required color-black mb-2">Link</label>
                    <input type="text" class="form-control mb-5" id="label" name="message">
                    <button type="button" class="btn bg-2 px-4" onclick="submit_me()">Insert</button>
                </form>
            </div>
            <div class="border rounded bg-white shadow-sm p-4">
                <?php
                $sql = "SELECT * FROM `notification` WHERE receiver_id = 1";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    if (strpos($row['message'], '//') !== false) {
                        $array = explode('//', $row['message']);
                ?>
                    <p class="color-black"><?php echo $array[0]. " " . "<a href='". $array[1] ."'>This form</a>". $array[2]?></p>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <?php
    require "html/footer.html";
    ?>
    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/jQueryRequest.js"></script>
    <script src="javascript/validations.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.title = "CCIT Alumni Tracing and Job Portal";
        var parent = document.getElementById('index-link').classList.add('active');

        function submit_me() {
            $.post(
                "includes/formSubmit.inc.php",
                $("#notification_form").serialize(),
                function(data) {
                    console.log(data)
                }
            );
        }
    </script>
</body>

</html>