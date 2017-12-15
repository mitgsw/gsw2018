<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?>| Bangkok, Thailand, 2018</title>
    <link rel="shortcut icon" href="http://gsw.mit.edu/2018/favicon.ico" />
    <link rel="stylesheet" href="splash/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="splash/css/style.css">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>


<!-- GENERIC HEADER -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="splash/img/logo.png" id="navbar-logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Conference Information<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Speakers</a></li>
                <li><a href="#">Registration</a></li>
                <li><a href="#">Schedule</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">About MITGSW</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Advisory Board</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Team</a>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script>
    $(document).scroll(function () {
        var scrollPos = $(document).scrollTop();
        if (scrollPos > 250) {
            $('#navbar-logo').addClass('navbar-brand-small');
            $('.navbar').addClass('navbar-condensed');
        } else {
            $('#navbar-logo').removeClass('navbar-brand-small');
            $('.navbar').removeClass('navbar-condensed');
        }
    });
</script>
<!-- END GENERIC HEADER -->

<!-- GENERIC SECTION - SPEAKERS -->
<div class="parallax-window header" data-parallax="scroll" data-image-src="<?= $headerImageSrc ?>">
    <div class="parallax-text">
        <span class="hidden-xs">Our Speakers</span>
    </div>
</div>