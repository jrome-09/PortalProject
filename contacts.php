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
    require "navigation.php";
    ?>
    <main>
        <div class="background-thicker-light">
            <div class="max-width-container d-flex align-items-center justify-content-center" style="height: 250px;">
                <h3 class="color-black mt-5"><strong>Contact</strong></h3>
            </div>
        </div>
        <div class="max-width-container">
            <div class="card p-4 border-0" style="box-shadow: 0 .125rem 1rem rgba(0,0,0,.075) !important;">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="color-black font-500 mb-4">SEND US A MESSAGE</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="sender--name" class="form-control color-black" placeholder="Your Name">
                                <label for="Sender--name" class="color-light font-small mb-4">Please enter your name</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="sender--email" class="form-control color-black" placeholder="Your Email">
                                <label for="Sender--email" class="color-light font-small mb-4">Please enter your email</label>
                            </div>
                        </div>
                        <input type="text" id="sender--subject" class="form-control color-black" placeholder="Message Subject">
                        <label for="sender--subject" class="color-light font-small mb-4">Please the message subject</label>
                        <textarea class="form-control color-black mb-4" id="sender--message" rows="4" placeholder="Your Message"></textarea>
                        <button type="button" class="btn btn-primary">SEND MESSAGE</button>
                    </div>
                    <div class="col-md-6" id="address--section">
                        <h6 class="color-black font-500 mb-4">Contact Address</h6>
                        <div class="border p-4">
                            <div class="d-flex align-items-center pb-5">
                                <div class="bg-primary image-container round"><span data-feather="map-pin" class="color-white"></span></div>
                                <div class="ps-2">
                                    <div class="color-light font-small">College: College of Communication and Information Technology</div>
                                    <div class="color-light font-small">University Address: </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-5">
                                <div class="bg-primary image-container round"><span data-feather="mail" class="color-white"></span></div>
                                <div class="ps-2">
                                    <div class="color-light font-small">Administrator: admin.ccit@unp.edu.ph</div>
                                    <div class="color-light font-small">College: ccit@unp.edu.ph</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-5">
                                <div class="bg-primary image-container round"><span data-feather="phone" class="color-white"></span></div>
                                <div class="ps-2">
                                    <div class="color-light font-small">Administrator: admin.ccit@unp.edu.ph</div>
                                    <div class="color-light font-small">College: ccit@unp.edu.ph</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-container border rounded mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.87284732816!2d120.38054531487872!3d17.561239487974625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338e657c067e2799%3A0xd855b72932882627!2sUniversity%20Of%20Northern%20Philippines!5e0!3m2!1sen!2sph!4v1619351699495!5m2!1sen!2sph" width="1130" height="348" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </main>
    <?php
    require "html/footer.html";
    ?>

    <script src="javascript/functions.js"></script>
    <script src="javascript/scroll.js"></script>
    <script>
        loadPage();
        changeColor();
        feather.replace()
        const nav_id = document.getElementById('nav-head');
        nav_id.classList.add("background-thicker-light");
        nav_id.classList.remove("background-blue");
        document.getElementById('contacts').classList.add("opened");
    </script>
</body>

</html>