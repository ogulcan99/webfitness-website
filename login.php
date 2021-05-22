<!DOCTYPE html>
<html lang="en">
<?php
include ("./inc/config.php");
if (isset($_SESSION)) {
    session_start();
    session_destroy();
}
if(isset($_POST['login'])) {

    $errMsg = '';

        // Get data from FORM
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == '')
        $errMsg = 'Email Giriniz';
    if($password == '')
        $errMsg = 'Şifre Giriniz';

    if($errMsg == '') {
        try {
            $stmt = $connect->prepare('SELECT uid, email, password FROM users WHERE email = :email');
            $stmt->execute(array(
                ':email' => $email
            ));
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if($data == false){
                $errMsg = "Account $email not found.";
            }
            else {
                if($password == $data['password']) {
                    session_start();
                    $_SESSION['uid'] = $data['uid'];
                    $_SESSION['email'] = $data['email'];
                    header("Location: index.php");
                    exit;
                }
                else
                    $errMsg = 'Wrong Password';
            }
        }
        catch(PDOException $e) {
            $errMsg = $e->getMessage();
        }
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log In | Web Fitness</title>
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
                    <div class="col-10 col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 offset-1 offset-sm-1 offset-md-2 offset-lg-4 offset-xl-4 offset-xxl-4 mx-auto box-bg"><?php
                    if(isset($errMsg)){
                        echo '<div class="col-md-12 col-xs-12 text-center" style="color:#68e3b5">'.$errMsg.'</div>';
                    }
                    ?>
                    <form action="" method="post">
                        <h2 class="visually-hidden">Login Form</h2>
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required="" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required="" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"></div>
                        <div class="mb-3"><input class="btn btn-primary btn-block submit d-block w-100" name="login" value="Log In" type="submit"></input>
                        </div>
                        <a class="forgot mb-3" href="signup.php">Sign Up Here.</a>
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
</body>

</html>