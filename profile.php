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
<body>
    <?php 
    include './inc/config.php';
    include './inc/header.php';
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
    <header data-bss-parallax-bg="true" class="masthead" style="background-image: url(assets/img/zoo_bg.jpg);background-position: center;background-size: cover;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 offset-1 offset-sm-1 offset-md-2 offset-lg-4 offset-xl-4 offset-xxl-4 mx-auto box-bg">
                        <h3>Personal Info</h3>
                        <form method="post">
                            <label class="form-label m-1">Height (in Meters)&nbsp;<input class="form-control d-xl-flex justify-content-xl-end align-items-xl-center" type="number" step="0.01" name="height" required="" value="<?php echo $height ?>"></label>
                            <label class="form-label m-1">Weight (in Kilograms)&nbsp;&nbsp;<input class="form-control d-xl-flex justify-content-xl-end align-items-xl-center" type="number" step="0.1" name="weight" required="" value="<?php echo $weight ?>"></label>
                            <label class="form-label m-1">BMI&nbsp; &nbsp; &nbsp;&nbsp;<input class="form-control" type="number" readonly="" disabled="" value="<?php echo $bmi ?>"></label>
                            <div class="d-xl-flex justify-content-xl-end p-2">
                                <?php 
                                if (empty($bmi)) {
                                    echo '<div class="col"><input class="btn btn-primary" name="save" value="Save" type="submit"></div>';
                                    echo '<div class="col"><input class="btn btn-primary disabled" name="update" value="Update" type="submit"></input></div>';
                                }
                                else{
                                    echo '<div class="col"><input class="btn btn-primary disabled" name="save" value="Save" type="submit"></div>';
                                    echo '<div class="col"><input class="btn btn-primary" name="update" value="Update" type="submit"></input></div>';
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                    <div class="col-10 col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 offset-1 offset-sm-1 offset-md-2 offset-lg-4 offset-xl-4 offset-xxl-4 mx-auto box-bg">
                        <h3>Subscrıptıons</h3>
                        <div class="row">
                            <div class="col">
                                <form method="post">
                                <ul>
                                    <?php 
                                    if (isset($_SESSION['uid'])) {
                                        $sql_get_plans = "SELECT `plans_users`.*, `plans`.* FROM `plans_users`,`plans` WHERE `plans_users`.`plan_id` = `plans`.`plan_id` AND `plans_users`.`uid` = '".$_SESSION['uid']."'";
                                        
                                        foreach (DB::query($sql_get_plans) as $row) {    
                                                                                
                                            echo '<li class="d-xl-flex justify-content-xl-end m-1">'.$row->plan_title.'<a href="delete_subscription.php?id='.$row->index_id.'" class="btn btn-primary btn-sm" type="button">Unsubscribe</a></li>';
                                        }
                                    }
                                    else{
                                        header("Location: index.php");
                                    }
                                    $sql_total_price = "SELECT SUM(`plans`.`plan_price`) FROM `plans`,`plans_users` WHERE `plans_users`.`plan_id` = `plans`.`plan_id` AND `plans_users`.`uid` = '".$_SESSION['uid']."'";
                                    $totalunpaid = DB::getVar($sql_total_price);


                                    ?>
                                </ul>
                            </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="d-xl-flex justify-content-xl-end">Total Unpaid Balance: $<?php echo $totalunpaid; ?> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-xl-flex justify-content-xl-end"><a href="#" onClick='alert("YOU CAN PAY HERE  TR070006400000111730401701")' class="btn btn-primary" type="button">Pay Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center download-section content-section" data-bss-parallax-bg="true" id="plans" style="background-image: url(assets/img/intro-bg.jpg);background-position: center;background-size: cover;">
        <div class="container d-lg-flex justify-content-lg-center align-items-lg-center">
            <?php 
            $sql = "SELECT * FROM plans WHERE `plan_bmi_min` <= '".$bmi."' AND `plan_bmi_max` >= '".$bmi."'";
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
    if (isset($_POST['update'])) {
        $uid = $_SESSION['uid'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bmi = $weight / ($height * $height);
        $sql_delete_row = "DELETE FROM `bmi_index` WHERE `uid` = '".$uid."'";
        DB::query($sql_delete_row);
        $id = DB::insert('INSERT INTO bmi_index (`uid`,`height`,`weight`,`bmi`) VALUES(?, ?, ?, ?)',
            array($uid, $height, $weight, $bmi));

        if($error = DB::getLastError())
        {
            echo '<script>alert("Error occured: ");</script>'; //$error[2];
        }
        else{
            // echo '<script>alert("Your info updated.");</script>';
            echo "<script>window.location = 'profile.php';</script>";
        }
    }
    if (isset($_POST['save'])) {
        $uid = $_SESSION['uid'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bmi = $weight / ($height * $height);

        $id = DB::insert('INSERT INTO bmi_index (`uid`,`height`,`weight`,`bmi`) VALUES(?, ?, ?, ?)',
            array($uid, $height, $weight, $bmi));
        if($error = DB::getLastError())
        {
                echo '<script>alert("Error occured: ");</script>'; //$error[2];
            }
            else{
                echo '<script>alert("Your info saved.");</script>';
                echo "<script>window.location = 'profile.php';</script>";
            }
        }
        ?>
    </body>
    </html>