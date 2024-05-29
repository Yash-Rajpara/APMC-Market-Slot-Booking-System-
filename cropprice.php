<?php


session_start(); 
$slot_location="Ahmedabad";
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
            font-weight : bold;
            color:#91f29a;
        }
        select option{
            background-color:black;
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
                        <label for="ylocation" style="color:white">Select Yard Location</label>
                        <select name="ylocation" id="ylocation">
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Anand">Anand</option>
                            <option value="Bhavnagar">Bhavnagar</option>
                            <option value="Bharuch">Bharuch</option>
                            <option value="Mahesana">Mahesana</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary form-control">Show Pricing</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Crop</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
<?php 
include 'db.php';
$sql="SELECT `crop`, `$slot_location` FROM `fproduct`";
$result=mysqli_query($conn, $sql);
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    if (isset($_POST['ylocation'])) {
        $slot_location=$_POST['ylocation'];
    }
    else {
        $slot_location="Ahmedabad";
    }

    $sql="SELECT `crop`, `$slot_location` FROM `fproduct`";
    $result=mysqli_query($conn, $sql);
  
            
    echo "<br/><br/><br/><h2>".$slot_location."</h2>";

}


?>
                        <?php
                            while ($row=mysqli_fetch_assoc($result)) {
                                
                                echo'<tr>
                                <td>'.$row["crop"].'</td>
                                <td>'.$row[$slot_location].'</td>
                                
                            </tr>';
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