<?php
require "../html/head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <link rel="stylesheet" href="candidate.css">
    <?php
    require "../html/script.html";
    require "../Candidate/candidate-navigation.php"
    ?>
    <main>
        <div class="bg-light">
            <div class="max-width-container">
                <h5 class="font-500">Search Employer</h5>
                <div class="input-group flex-nowrap me-1" style="max-width: 400px;">
                    <div class="border px-2 d-flex justify-content-center align-items-center border-end-0 rounded-start bg-white">
                        <span data-feather="user" class="color-black"></span>
                    </div>
                    <input type="text" class="form-control border-start-0 fontsize-14" placeholder="Employer or Company Name...">
                    <button class="btn btn-primary fontsize-14">Search</button>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-width-container">
                <div class="border p-4 color-white rounded">
                    <div class="image-continer rounded bg-light border m-2" style="height: 100px; width: 100px;">

                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require "../Jobs/details.php";
    require "../html/footer.html";
    ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script>
        loadPage();
        feather.replace();
    </script>
</body>

</html>