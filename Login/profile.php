<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>AgroCulture</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap\js\bootstrap.min.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>
    <link rel="stylesheet" href="../css/skel.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style-xlarge.css" />
    <link rel="stylesheet" href="../indexFooter.css" />

</head>

<body>
    <?php
            require 'menu.php';
        ?>

    <section id="banner" class="wrapper">
        <div class="container">
            <h2>Welcome ,
                <?php echo $name; ?> !!
            </h2>
            <p>
                <?= $email ?>
            </p>
            <br><br><br>
            <?php if($_SESSION['Category'] == 1): ?>
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <a href=../profileView.php class="button special">My Profile</a>
                </div>
                <div class="6u 12u$(xsmall)">
                    <a href="logout.php" class="button special">LOG OUT</a>
                </div>
            </div>
            <?php else: ?>
            <div class="row uniform">

                <div class="12u 12u$(xsmall)">
                    <a href="logout.php" class="button special">LOG OUT</a>
                </div>
            </div>

            <?php endif; ?>
        </div>
        <!-- Footer -->


    </section>
    <footer class="footer-distributed" style="background-color:black" id="aboutUs">
        <center>
            <h1 style="font: 35px calibri;">About Us</h1>
        </center>
        <div class="footer-left">
            <h3 style="font-family: 'Times New Roman', cursive;">APMC Market &copy; </h3>
            <!--	<div class="logo">
                <a href="index.php"><img src="images/logo.png" width="200px"></a>
            </div>-->
            <br />
            <p style="font-size:20px;color:white">Design Engineering Project !!!</p>
            <br />
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p style="font-size:20px">LDCE<span>Ahmedabad</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p style="font-size:20px">8866445577</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p style="font-size:20px"><a href="mailto:apmcmarket@gmail.com"
                        style="color:white">apmcmarket@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about" style="color:white">
                <span style="font-size:20px"><b>About APMC Market</b></span>
                APMC Market is Online Crop Selling System
            </p>
            <!-- <div class="footer-icons">
                <a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
            </div> -->
        </div>

    </footer>
</body>

</html>