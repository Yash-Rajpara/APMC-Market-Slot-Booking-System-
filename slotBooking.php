<?php 

session_start(); 

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    include 'db.php';
    $slot_location=$_POST['ylocation'];
    $slot_crop=$_POST['crop'];
    $slot_sdate=$_POST['sdate'];
    $slot_usdate=date("d-m-Y", strtotime($slot_sdate));
    $slot_stime=$_POST['stime'];

    $user_id=$_SESSION['id'];
    $user_username=$_SESSION['Username'];
    $user_email=$_SESSION['Email'];

    $sql="INSERT INTO `slotbooking`(`user_id`, `user_name`, `user_email`, `yard_location`, `crops`, `slot_date`, `slot_time`) VALUES ('$user_id','$user_username','$user_email','$slot_location','$slot_crop','$slot_usdate','$slot_stime')";

    $request=mysqli_query($conn, $sql);
    if ($request) {
        header("Location: slotbookingshow.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>APMC Market</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="login.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="indexfooter.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <style>
        select option{
            background-color : black;
        }
        label{

            color:white;
        }
    </style>
</head>

<?php
		require 'menu.php';
	?>

<!-- Banner -->
<section id="banner" class="wrapper">
    <div class="container">
        <h2>APMC Market</h2>
        <p>Your Product Our Market</p>
        <br><br>
        <center>
            <div class="container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="ylocation" class="text-left">Yard Location</label>
                        <select name="ylocation" id="ylocation">
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Amreli">Amreli</option>
                            <option value="Bhavnagar">Bhavnagar</option>
                            <option value="Jamnagar">Jamnagar</option>
                            <option value="Junagadh">Junagadh</option>
                            <option value="Kutch">Kutch</option>
                            <option value="Mahesana">Mahesana</option>
                            <option value="Surat">Surat</option>
                            <option value="Surendranagar">Surendranagar</option>
                            <option value="Vadodara">Vadodara</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="crop" class="text-left">crop</label>
                        <select name="crop" id="crop">
                            <option value="wheat">wheat</option>
                            <option value="rice">rice</option>
                            <option value="peanut">peanut</option>
                            <option value="sesame">sesame</option>
                            <option value="cotton">cotton</option>
                            <option value="millet">millet</option>
                            <option value="corn">corn</option>
                            <option value="sugarcane">sugarcane</option>
                            <option value="mango">mango</option>
                            <option value="onion">onion</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="sdate" class="text-left">Slot Date</label>
                        <input type="date" class="form-control" id="sdate" name="sdate" style="background-color: transparent;cursor:pointer; color:white; border: solid 1px rgba(144, 144, 144, 0.25)">
                    </div>
                    <div class="form-group">
                        <label for="stime" class="text-left">Slot Time</label>
                        <select name="stime" id="stime">
                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                            <option value="11:00 - 12:00">11:00 - 12:00</option>
                            <option value="12:00 - 13:00">12:00 - 13:00</option>
                            <option value="13:00 - 14:00">13:00 - 14:00</option>
                            <option value="14:00 - 15:00">14:00 - 15:00</option>
                            <option value="15:00 - 16:00">15:00 - 16:00</option>
                            <option value="16:00 - 17:00">16:00 - 17:00</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary-outline form-control">Book Slot</button>
                </form>


        </center>


</section>




<!-- Footer -->
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








<script>
    // Get the modal

</script>


</body>

</html>