<?php
require "../html/head.html";
?>

<body>
    <link rel="stylesheet" href="../Candidate/candidate-style.scss">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php
    require "../html/script.html";
    require "candidate-navigation.php"
    ?>
    <main class="bg-primary">
        <h1 class="color-black">Hello World!</h1>
    </main>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>