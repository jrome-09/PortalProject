<footer class="bg-2">
    <div class="max-width-container text-center">
        <a href="index.php" class="text-white no-text-decor font-900" id="footer-web-id">
            <h4 class="hvtext-yellow">College of Communication And Information Technology</h4>
        </a>
        <div>
            <nav class="mb-4">
                <ul class="m-0 p-0">
                    <small>
                        <li class="d-inline-block mx-1">
                            <a href="../../PortalProject/index.php" class="text-white font-500 no-text-decor py-1 px-2 hvtext-yellow">
                                Home
                            </a>
                        </li>
                        <li class="d-inline-block mx-1">
                            <a href="../../PortalProject/about.php" class="text-white font-500  no-text-decor py-1 px-2 hvtext-yellow">
                                About us
                            </a>
                        </li>
                        <li class="d-inline-block mx-1">
                            <a href="../../PortalProject/contacts.php" class="text-white font-500 no-text-decor py-1 px-2 hvtext-yellow">
                                Contacts
                            </a>
                        </li>
                        <li class="d-inline-block mx-1">
                            <a href="#" class="text-white font-500 no-text-decor py-1 px-2 hvtext-yellow">
                                Explore
                            </a>
                        </li>
                        <li class="d-inline-block mx-1">
                            <a href="#" class="text-white font-500 no-text-decor py-1 px-2 hvtext-yellow">
                                Services
                            </a>
                        </li>
                    </small>
                </ul>
            </nav>
            <div id="media">
                <a href="#" class="text-white hvtext-yellow"><span data-feather="facebook" class="text-white"></span></a>
                <a href="#" class="hvtext-yellow"><span data-feather="twitter" class="text-white"></span></a>
                <a href="#" class="hvtext-yellow"><span data-feather="mail" class="text-white"></span></a>
                <a href="#" class="hvtext-yellow"><span data-feather="instagram" class="text-white"></span></a>
            </div>
            <p class="copyright color-light mt-5 fontsize-n12"><br> ©2021 CCIT. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php
if (file_exists("javascript/functions.js")) {
    echo '<script src="javascript/functions.js"></script>';
} else {
    echo '<script src="../javascript/functions.js"></script>';
}

if (file_exists("javascript/validations.js")) {
    echo '<script src="javascript/validations.js"></script>';
} else {
    echo '<script src="../javascript/validations.js"></script>';
}

if (file_exists("javascript/jQueryRequest.js")) {
    echo '<script src="javascript/jQueryRequest.js"></script>';
} else {
    echo '<script src="../javascript/jQueryRequest.js"></script>';
}
?>

<script>
    loadPage();
    feather.replace();
</script>