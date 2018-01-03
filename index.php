<?php
    $pageTitle = 'MIT Global Startup Workshop 2018 | Bangkok, Thailand';
    $headerMainPageImageSrc = 'headers/img/header1.jpg';
    $headerTitle = 'MIT Global Startup Workshop 2018';
    $headerSubTitle = 'Bangkok, Thailand';

    include('templates/nav-bar.php');
    include('templates/header.php');

    $scripts = "<script src=\"splash/js/d3.js\"></script>";
    include('templates/speakers-bubbles.php');

    include('templates/location.php');
    include('templates/footer.php');
?>