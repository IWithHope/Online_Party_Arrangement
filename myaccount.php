
<?php require_once('includes/connect.php') ?>

<html>
    <head>

        <title>Lanka Events</title>
       
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/foot.css">

    </head>

    <body id="mainBody">

        <header class="head">

            <div class="TopNavigation">

                <ul class="navbar1_left">
                     <li class="li_left_C"><a href="Login.php#D">Log In</a></li>
                    <li class="li_left_C"><a href="Register.php#E">Register</a></li>
                    <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94412256879</b></li>
                    <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@Lankaproperty.lk</b></li>
                </ul>


            </div>

            <div class="SecNavBar">
                
                <img src="./images/bg1.jpg" class="header_image">
                            
                 <a href="index.php" >Home</a>
                 <a  href="about.php" >About Us</a>
                 <a  href="services.html"> Services</a>
                 <a  href="gallery.html"> Gallery</a>
                 <a href="party.php">Party</a>
                 <a href="feedback.php">feedback</a>
                 <a href="myaccount.php"class="active">My Account</a>
                 <a href="Help.php">Help</a>

            </div>
           
        </header>
        <hr>
<?php

include_once('./includes/connect.php');

session_start();// start the session (if not already started)

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];

    $query = "SELECT * from users where UserID = '$user_id' ";

    $result = $conn->query($query);    

    $row = $result->fetch_assoc();

    $username = $row['Username'];
    $fname = $row['Fname'];
    $lname = $row['Lname'];
    $email = $row['Email'];
    $birthday = $row['DateofBirth'];
    $mobile = $row['PhoneNumber'];
    $gender = $row['Gender'];
    $address = $row['Address'];
   
}

else{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./styles/myaccount.css">
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="avatar">
                <img src="./images/user.png" alt="User Avatar">
            </div>
            <div class="user-info">
                <h1><?php echo $username ?></h1>
                <p>user</p>
            </div>
        </div>
        <div class="profile-details">
            <h2>Account</h2>
            <ul>
                
                <li><strong>Name :</strong> <?php echo $fname." ".$lname ?></li>
                <li><strong>Address :</strong> <address><?php echo $address ?></address></li>
                <li><strong>Email :</strong> <?php echo $email?> </li>
                <li><strong>Moble No :</strong><?php echo $mobile?> </li>
                <li><strong>Date of Birth :</strong> <?php echo $birthday?></li>
                <li><strong>Gender :</strong> <?php echo $gender ?></li>
                <li><a href="logout.php"><button>Log Out</button></a></li>
            </ul>
        </div>
    </div>
<br><br>

<!--This is the foolter one -->
<div class="container_foot">

		<div class="item one">
			<center><h3>Contact Us</h3></center>
				<div class="icon">
					<img src="./images/location.gif"><br><br>
					<img src="./images/email.png">
				</div>
				<div class="para">
					<p>Lanka Events,Hugh<br>Galle Rd,<br>Colombo,Sri Lanka</p><br><br>
					<p>info@lankaevents.com</p>
				</div>
		</div>
		<div class="item two">
			<center><h3>Our Services</h3></center>
		
			
			<p><span>Our Story</span> <br><br>
				<span>Our Gallery</span> <br><br>
				<span>Event Guides</span> <br><br>
				<span>Latest News</span> <br><br>
				<span>Price & Terms</span> <br>
			</p>

		</div>
		
		<div class="item three">
			
			<center><h3>Recent Post</h3></center>
			<div class="icon">
				<img src="./images/image1.jpg" class="post"><br><br><hr>
				<img src="./images/images2.jpeg" class="post"><br><br>
				
			</div>
			<div class="para">
				<p>10 Unique wedding themes<br>
					March 1, 2020</p><br><br>
				<p>10 best wedding destinations<br>
					Jan 8, 2020</p>
			</div>
			

		</div>

		<div class="item four">
			<center><h3>Our top partners</h3></center>
			<p>
				Lassana Flora<br>
				WAO<br>
				Mihin Tours<br>
				Lanka Express Transport & Logistics<br>
				Sritaly.com<br>
			</p>
			

		</div>
	</div>
            
    </body>
</html>
