<?php
require "html/head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php
    require "html/script.html";
    require "includes/nav.php";
    ?>
    <main class="bg-light">
    <div class="max-width-container">
            <h1 class="mb-4 font-500">Contacts</h1>
            <div class="border rounded bg-white shadow-sm p-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p class="font-500">SEND US A MESSAGE</p>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="#" class="required">Your Name</label>
                                    <input type="text" class="form-control mb-2">
                                </div>
                                <div class="col-lg-6">
                                    <label for="#" class="required">Email Address</label>
                                    <input type="text" class="form-control mb-2">
                                </div>
                            </div>
                            <label for="#" class="required">Message Subject</label>
                            <input type="text" class="form-control mb-2">
                            <label for="#" class="required">Your Message</label>
                            <textarea name="#" id="#" cols="30" rows="4" class="form-control mb-2"></textarea>
                            <button type="button" class="btn bg-2 px-5">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    <p class="font-500">CONTACT DETAILS</p>
                        <div class="border rounded p-4">
                            <div class="d-flex align-items-center mb-5">
                                <span data-feather="map-pin" class="me-4"></span>
                                <p class="m-0">College: College of Communication and Information Technology <br> Address: Vigan City Ilocos Sur</p>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <span data-feather="mail" class="me-4"></span>
                                <p class="m-0">Administrator: admin.ccit@unp.edu.ph <br> College: ccit@unp.edu.ph</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span data-feather="phone" class="me-4"></span>
                                <p class="m-0">Administrator: +63 9876543211 <br> College: +63 9876543211</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded bg-white">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15215.491388301989!2d120.382734!3d17.5612395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd855b72932882627!2sUniversity%20Of%20Northern%20Philippines!5e0!3m2!1sen!2ssg!4v1632295240248!5m2!1sen!2ssg" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
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
    <script>
        loadPage();
        feather.replace();
        document.title = "CCIT | Contacts"
        var parent = document.getElementById('contacts-link').classList.add('active')
    </script>
</body>

</html>