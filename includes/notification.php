<div class="mx-2 p-1 position-relative" id="notif_wrapper">
    <a href="#" class="decor-none text-white" onclick="document.getElementById('notif_dropdown').style.display = 'block'">
        <span data-feather="bell" class="hvtext-yellow me-0"></span>
    </a>
    <div class="position-absolute border rounded bg-white overflow-hidden mt-4 shadow-sm" id="notif_dropdown">
        <header class="border-bottom background-thicker-light py-3 px-4 color-black fontsize-14">
            Notifications
        </header>
        <main class="p-4">

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
        </main>
    </div>
</div>
<style>
    #notif_wrapper {
        z-index: 10;
    }

    #notif_dropdown {
        min-width: 348.283px;
        right: 0;
        height: 360px;
        display: none;
    }
</style>
<script>
    window.addEventListener('mouseup', function(event) {
        var drop = document.getElementById('notif_dropdown');
        if (event.target != drop && event.target.parentNode != drop) {
            drop.style.display = 'none';
        }
    });
</script>