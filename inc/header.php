<?php 
session_start();
if (isset($_SESSION['email'])) {


    echo '<nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">';
    echo '<div class="container"><a class="navbar-brand" href="index.php#">Web Fitness</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>';
    echo '<div class="collapse navbar-collapse" id="navbarResponsive">';
    echo '<ul class="navbar-nav ms-auto">';
    echo '<li class="nav-item nav-link"><a class="nav-link active" href="#about">About</a></li>';
    echo '<li class="nav-item nav-link"><a class="nav-link" href="#plans">PLANS</a></li>';
    echo '<li class="nav-item nav-link"><a class="nav-link" href="#contact">CONTACT</a></li>';
    echo '<li class="nav-item nav-link"><a class="btn btn-secondary" role="button" href="profile.php">'.$_SESSION['email'].'</a></li>';
    echo '<li class="nav-item nav-link"><a class="btn btn-secondary" role="button" href="logout.php">LOG OUT</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';

}
else{

    echo '<nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">';
    echo '<div class="container"><a class="navbar-brand" href="#">Web Fitness</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>';
    echo '<div class="collapse navbar-collapse" id="navbarResponsive">';
    echo '<ul class="navbar-nav ms-auto">';
    echo '<li class="nav-item nav-link"><a class="nav-link active" href="#about">About</a></li>';
    echo '<li class="nav-item nav-link"><a class="nav-link" href="#plans">PLANS</a></li>';
    echo '<li class="nav-item nav-link"><a class="nav-link" href="#contact">CONTACT</a></li>';
    echo '<li class="nav-item nav-link"><a class="nav-link" href="login.php">LOG IN</a></li>';
    echo '<li class="nav-item nav-link"><a class="btn btn-secondary" role="button" href="signup.php">SIGN UP</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';
}
?>