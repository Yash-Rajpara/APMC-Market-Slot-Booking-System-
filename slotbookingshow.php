<?php 

session_start(); 

// if ($_SERVER['REQUEST_METHOD']== 'POST') {
//     include 'db.php';
//     $slot_location=$_POST['ylocation'];
//     $slot_crop=$_POST['crop'];
//     $slot_sdate=$_POST['sdate'];
//     $slot_usdate=date("d-m-Y", strtotime($slot_sdate));
//     $slot_stime=$_POST['stime'];

//     $user_id=$_SESSION['id'];
//     $user_username=$_SESSION['Username'];
//     $user_email=$_SESSION['Email'];

//     $sql="INSERT INTO `slotbooking`(`user_id`, `user_name`, `user_email`, `yard_location`, `crops`, `slot_date`, `slot_time`) VALUES ('$user_id','$user_username','$user_email','$slot_location','$slot_crop','$slot_usdate','$slot_stime')";

//     $request=mysqli_query($conn, $sql);
//     if ($request) {
//         header("Location: slotbookingshow.php");
//     }
// }


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
        .table thead tr th{
            color:#91f29a;
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

<?php
// session_start();
include 'db.php';
$user_id=$_SESSION['id'];



if ($_SESSION['Username']=='PritSukhdiya') {
    $sql="SELECT * FROM `slotbooking`";
}
else{

    $sql="SELECT * FROM `slotbooking` WHERE `user_id`=$user_id";
}

$result=mysqli_query($conn,$sql);
$numrow=mysqli_num_rows($result);
if ($_SESSION['Username']=='PritSukhdiya') {
    echo "Total ".$numrow." Slots Booked by Farmers" ;

}
else{

    echo "Total ".$numrow." Slots Booked by you" ;
}

if ($numrow==0) {
    header("Location: slotbooking.php");
}


?>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SR NO.</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Yard_Location</th>
                            <th scope="col">Crops</th>
                            <th scope="col">Slot_date</th>
                            <th scope="col">Slot_time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count=1;
                            while ($row=mysqli_fetch_assoc($result)) {  
                                echo'<tr>
                                <td>'.$count.'</td>
                                <td>'.$row["user_name"].'</td>
                                <td>'.$row["yard_location"].'</td>
                                <td>'.$row["crops"].'</td>
                                <td>'.$row["slot_date"].'</td>
                                <td>'.$row["slot_time"].'</td>
                            </tr>';
                            $count++;
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>

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