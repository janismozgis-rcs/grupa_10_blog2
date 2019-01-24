<?php
include '../functions.php';
include '../components/header.php';


if (empty($_GET)) {
    include '../pages/landingPage.php';
} else if (isset($_GET['login'])) {
    include '../pages/login.php';
} else if (isset($_GET['about-us'])) {
    include '../pages/aboutUs.php';
} else {
    include '../pages/404.php';
}


include '../components/footer.php';


