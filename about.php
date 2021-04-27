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
                <h3 class="color-black mt-5"><strong>About us</strong></h3>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-width-container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-4">What we can do</h4>
                        <p class="font-small color-light">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium itaque neque, assumenda
                            voluptatum nostrum temporibus suscipit molestiae minus aspernatur, eveniet aut? Modi libero
                            voluptatum, necessitatibus assumenda perspiciatis id quam! Eos!
                            <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium itaque neque, assumenda
                            voluptatum nostrum temporibus suscipit molestiae minus aspernatur, eveniet aut? Modi libero
                            voluptatum, necessitatibus assumenda perspiciatis id quam! Eos!
                        </p>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="col-md-6 flex-middle">
                        <div class="image-container" style="height: 300px; width: 500px; background-color: rgb(240, 240, 240);">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="max-width-container">
                <div class="text-center">
                    <h4 class="mb-2 color-black">Project Team</h4>
                    <p class="font-small color-light">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laudantium itaque neque, assumenda
                    </p>
                </div>
                <div class="carousel-container mt-5 shadow-sm rounded">
                    <div id="groupCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#groupCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#groupCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#groupCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#groupCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center bg-white rounded" data-bs-interval="10000">
                                <div class="round image-container background-thicker-light mb-3">

                                </div>
                                <h5 class="color-black">Jerome Cabrera</h5>
                                <p class="font-small color-light">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laudantium itaque neque, assumenda
                                </p>

                            </div>
                            <div class="carousel-item text-center bg-white rounded" data-bs-interval="10000">
                                <div class="round image-container background-thicker-light mb-3">

                                </div>
                                <h5 class="color-black">Jigs Cxyrel Crisologo</h5>
                                <p class="font-small color-light">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laudantium itaque neque, assumenda
                                </p>

                            </div>
                            <div class="carousel-item text-center bg-white rounded" data-bs-interval="10000">
                                <div class="round image-container background-thicker-light mb-3">

                                </div>
                                <h5 class="color-black">Kathleen Joy Bernal</h5>
                                <p class="font-small color-light">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laudantium itaque neque, assumenda
                                </p>

                            </div>
                            <div class="carousel-item text-center bg-white rounded" data-bs-interval="10000">
                                <div class="round image-container background-thicker-light mb-3">

                                </div>
                                <h5 class="color-black">Mhark Alfred Diaz</h5>
                                <p class="font-small color-light">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laudantium itaque neque, assumenda
                                </p>

                            </div>
                        </div>
                    </div>
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
        document.getElementById('about').classList.add("opened");
    </script>

</body>

</html>