<?php

include 'inc/db.php';
include 'inc/htmlheader.php';
include 'inc/htmlnav.php';

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 'regisztraciok';
}
switch ($page) {
    case "admin":
        include "controller/adminBelepes.php";
        break;
    default:
        include "controller/regisztraciok.php";
        break;
}

include 'inc/footer.php';
