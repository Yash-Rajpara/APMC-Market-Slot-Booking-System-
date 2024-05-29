<?php
// session_start();
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">APMC Market</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<?php
								if ($_SESSION['Username']=='PritSukhdiya') {
								
								}
								else {
									echo'<li><a href="slotBooking.php"><span class="glyphicon glyphicon-calendar">Schedule-Slot</a></li>';
								}
						?>
						<li><a href="slotbookingshow.php"><span class="glyphicon glyphicon-bookmark"> Booked-Slot</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="cropprice.php"><span class="glyphicon glyphicon-grain"> Crop-Pricing</a></li>
					</ul>
				</nav>
			</header>
			

	</body>
</html>
