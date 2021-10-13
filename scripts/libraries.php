<!-- BOOTSTRAP POPPER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php

// BOOTSTRAP CDN
if (file_exists('node_modules/bootstrap/dist/css/bootstrap.min.css')) {
    echo '<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">';
} elseif (file_exists('../node_modules/bootstrap/dist/css/bootstrap.min.css')) {
    echo '<link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">';
}

if (file_exists('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')) {
    echo '<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>';
} elseif (file_exists('../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')) {
    echo '<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>';
}

if (file_exists('node_modules/bootstrap/dist/js/bootstrap.min.js')) {
    echo '<script src="node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>';
} elseif (file_exists('../node_modules/bootstrap/dist/js/bootstrap.min.js')) {
    echo '<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>';
}