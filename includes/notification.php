<div class="mx-2 p-1 position-relative" id="notif_wrapper">
    <a href="#" class="decor-none text-white" onclick="document.getElementById('notif_dropdown').style.display = 'block'">
        <span data-feather="bell" class="hvtext-yellow me-0"></span>
        <div id="nc_container" class="bg-warning rounded-circle">
            <p class="text-danger fontsize-n12 font-700 m-0 " id="notification_count"></p>
        </div>

    </a>
    <div class="position-absolute border rounded bg-white overflow-hidden mt-4 shadow-sm" id="notif_dropdown">
        <header class="border-bottom background-thicker-light py-3 px-4 color-black fontsize-14">
            Notifications
        </header>
        <main>
            <?php

            $sql = "SELECT * FROM `notification` WHERE receiver_id = $uid ORDER BY _id DESC ";
            $result = $conn->query($sql);
            $nc = 0;
            if (mysqli_num_rows($result) === 0) {
            ?>
                <div class="image-container hw-100px m-auto overflow-visible mt-5">
                    <img src="
                <?php
                if (file_exists('images/svg/undraw_envelope.svg')) {
                    echo 'images/svg/undraw_envelope.svg';
                } else {
                    echo '../images/svg/undraw_envelope.svg';
                }
                ?>
                " alt="">
                </div>
                <p class="text-secondary text-center mt-2">0 Notification</p>
                <?php
            } else {
                while ($row = $result->fetch_assoc()) {
                    if ($row['status'] == 0) {
                        $nc = $nc + 1;
                    }
                    if (strpos($row['message'], '//') !== false) {
                        $array = explode('//', $row['message']);
                        $link;
                        if (file_exists($array[1])) {
                            $link = $array[1];
                        } else {
                            $link = '../' . $array[1];
                        }
                ?>
                        <div class="p-3 hvbg-light blh">
                            <div class="d-flex align-items-start">
                                <div class="image-container rounded-circle border hw-30px bg-white me-2">

                                </div>
                                <div>
                                    <a href="#" onclick="submit_notification(this.id)" id="notification_<?php echo $row['_id'] ?>" class="mb-2 hvtext-yellow color-black ntd fontsize-13 char-50">
                                        <?php echo $array[0] . " " . 'This Form' . " " . $array[2] ?>
                                    </a>
                                    <p class="text-secondary fontsize-n12 m-0 text-start"><?php echo $row['date_created'] ?></p>
                                </div>

                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                        <div class="p-3 hvbg-light blh">
                            <div class="d-flex align-items-start">
                                <div class="image-container rounded-circle border hw-30px bg-white me-2">

                                </div>
                                <div>
                                    <a href="#" onclick="submit_notification(this.id)" id="notification_<?php echo $row['_id'] ?>" class="hvtext-yellow color-black ntd fontsize-13 char-50">
                                        <?php echo $row['message'] ?>
                                    </a>
                                    <p class="text-secondary fontsize-n12 m-0 text-start"><?php echo $row['date_created'] ?></p>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </main>
    </div>
</div>
<?php
$notification_path;
if (file_exists('notification.php')) {
    $notification_path = 'notification.php';
} else {
    $notification_path = '../notification.php';
}
?>
<form action="<?php echo $notification_path; ?>" method="post" id="notification_form">
    <input type="hidden" id="notification_input" name="notification_input">
</form>
<style>
    #notif_wrapper {
        z-index: 10;
    }

    #notif_dropdown {
        width: 348.283px;
        right: 0;
        height: 360px;
        display: none;

    }

    #nc_container {
        position: absolute;
        top: -2px;
        right: -8px;
        height: 1.2rem;
        width: 1.2rem;
        padding: 0;
        display: none;
        justify-content: center;
        align-items: center;
    }
</style>
<script>
    window.addEventListener('mouseup', function(event) {
        var drop = document.getElementById('notif_dropdown');
        if (event.target != drop && event.target.parentNode != drop) {
            drop.style.display = 'none';
        }
    });

    function submit_notification(_id) {
        document.getElementById('notification_input').value = _id
        const form = document.getElementById('notification_form')
        form.submit();
    }

    <?php
    if ($nc != 0) {
    ?>
        document.getElementById('nc_container').style.display = "flex"
        document.getElementById('notification_count').innerHTML = "<?php echo $nc; ?>"
    <?php
    }
    ?>
    
</script>