<!DOCTYPE html>
<html lang="en">
<?php 
$plan_id = $_GET['id'];
?>
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
<body>
    <?php 
    include './inc/config.php';
    include './inc/header.php';
    if (empty($_SESSION['uid'])) {
    header("Location: signup.php");
    }

    if (isset($_SESSION['uid'])) {
        $sql_get_info = "SELECT * FROM bmi_index WHERE uid = '".$_SESSION['uid']."'";
        foreach (DB::query($sql_get_info) as $row) {
            $height = $row->height;
            $weight = $row->weight;
            $bmi = $row->bmi;
        }
    }
    else{
        header("Location: index.php");
    }
    ?>
    <section class="text-center download-section content-section" data-bss-parallax-bg="true" id="plans" style="background-image: url(assets/img/intro-bg.jpg);background-position: center;background-size: cover;">
        <div class="container d-lg-flex justify-content-lg-center align-items-lg-center">
            <?php 
            $sql = 'SELECT * FROM plans WHERE plan_id = "'.$plan_id.'"';
            foreach (DB::query($sql) as $row) {
                echo '<form method="post">';
                echo '<div class="col bg-box p-2">';
                echo '<h1>'.$row->plan_title.'</h1>';
                echo '<p>'.$row->plan_desc.'</p>';
                echo '<input class="btn btn-primary btn-lg btn-default text-center m-1" value="Subscribe" name="subscribe" type="submit"></input>';
                echo '</form>';
                echo '</div>';
            }
            ?>
        </div>
        <p></p>
    </section>

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
    if (isset($_POST['subscribe'])) {

        $uid = $_SESSION['uid'];

        // $sql_bmi_check = "SELECT bmi FROM bmi_index WHERE uid = '".$uid."'";,
        // foreach (DB::query($sql_bmi_check) as $row) {
        //     $bmi = $row->bmi;
        // }

        // $sql_bmi_plan_check = "SELECT plan_bmi_min,plan_bmi_max FROM plans WHERE plan_id = '".$plan_id."'";

        // foreach (DB::query($sql_bmi_plan_check) as $row) {
        //     $bmi = $row->bmi;
        // }

        $id = DB::insert('INSERT INTO plans_users (`uid`,`plan_id`) VALUES(?, ?)',
            array($uid, $plan_id));

        if($error = DB::getLastError())
        {
            echo '<script>alert("Error occured: ");</script>'; //$error[2];
        }
        else{
             echo '<script>alert("You are subscribed.");</script>';
            echo "<script>window.location = 'profile.php';</script>";
        }
    }
    ?>
</body>
</html>