<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Web Fitness</title>
    <meta name="description" content="Web Fitness">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77" style="font-family: Cabin, sans-serif;">
<?php 
include './inc/header.php';
?>
<header data-bss-parallax-bg="true" class="masthead" style="background-image: url(assets/img/zoo_bg.jpg);background-position: center;background-size: cover;">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="brand-heading" style="text-shadow: 10px 10px 10px rgb(0,0,0);">WEB FITNESS</h1>
                    <p class="intro-text" style="text-shadow: 10px 10px 10px rgb(0,0,0);">Diet Plans for Everyone.<br>Health for All.</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="text-center content-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>ABOUT WEB FITNESS</h2>
                <p>This is the service you always asked for.&nbsp;<br><a href="signup.php">Sign Up Here</a></p>
            </div>
        </div>
    </div>
</section>
    <section class="text-center download-section content-section" data-bss-parallax-bg="true" id="plans" style="background-image: url(assets/img/intro-bg.jpg);background-position: center;background-size: cover;">
        <div class="container d-lg-flex justify-content-lg-center align-items-lg-center">
            <?php 
            include './inc/config.php';
            $sql = "SELECT * FROM plans";
            foreach (DB::query($sql) as $row) {
                echo '<div class="col bg-box p-2">';
                echo '<h1>'.$row->plan_title.'</h1>';
                echo '<a href="plans.php?id='.$row->plan_id.'" class="btn btn-primary btn-lg btn-default" type="button">Subscribe</a>';
                echo '';
                echo '</div>';
            }
            ?>
        </div>
    </section>
<section class="text-center content-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Contact us</h2>
                <p>Web Fitness</p>
                <ul class="list-inline banner-social-buttons">
                    <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Google+</span></button></li>
                    <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="map-clean"></div>
<footer>
    <div class="container text-center">
        <p>Copyright ©&nbsp;Web Fitness 2021</p>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/grayscale.js"></script>
</body>

</html>