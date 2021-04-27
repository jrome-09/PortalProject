<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a Test Page</title>
    <?php
    require "html/script.html";
    ?>
</head>

<body>

    <style>
        .carousel-item {
            height: 20rem;
            width: 100%;
            background-color: #777;
            position: relative;
        }

        .carousel-container{
            position: relative;
            width: 32rem;
            height: 20rem;
            margin: auto;
        }
    </style>

    <h1 class="text-center fw-bold m-5">Hello! This is a Test Page</h1>
    <div class="carousel-container">
        <div id="groupCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#groupCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#groupCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active text-center" data-bs-interval="10000">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>

                </div>
                <div class="carousel-item text-center" data-bs-interval="10000">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>

</html>