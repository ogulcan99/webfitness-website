<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up | Web Fitness</title>
    <meta name="description" content="Web Fitness">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php 
    include './inc/header.php';
    ?>
    <header data-bss-parallax-bg="true" class="masthead" style="background-image: url(assets/img/zoo_bg.jpg);background-position: center;background-size: cover;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 offset-1 offset-sm-1 offset-md-2 offset-lg-4 offset-xl-4 offset-xxl-4 mx-auto box-bg">
                        <form method="post">
                            <h2 class="visually-hidden">Login Form</h2>
                            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required=""></div>
                            <div class="mb-3"><input class="btn btn-primary btn-block submit d-block w-100" name="submit" value="Sign Up" type="submit"></div>
                            <a class="forgot" href="login.php">Log In Here.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;Web Fitness 2021</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <?php 
    include './inc/config.php';
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];   
        $password = $_POST['password'];    
        $id = DB::insert('INSERT INTO users (`email`, `password`) VALUES(?, ?)',
            array($email, $password));
        if($error = DB::getLastError())
        {
            echo '<script>alert("Error occured: ");</script>'; //$error[2];
        }
        else{
            echo '<script>alert("Registered! ,You have been redirected to log in screen.");</script>';
            echo "<script>window.location = 'login.php';</script>";
        }
    }
    ?>
</body>

</html>