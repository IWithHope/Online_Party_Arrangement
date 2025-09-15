<?php require_once('includes/connect.php') ?>

<html>
    <head>

        <title>Lanka Events</title>
      
        <link rel="stylesheet" href="styles/style.css">        
        <link rel="stylesheet" href="styles/foot.css">
        <script type="text/javascript" src="./js/loginjs.js"></script>
        

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
                <a name=D>
                <a href="index.php" class="active">Home</a>
                 <a  href="about.php">About Us</a>
                 <a  href="services.html"> Services</a>
                 <a  href="gallery.html"> Gallery</a>
                 <a href="party.php">Party</a>
                 <a href="feedback.php">feedback</a>
                 <a href="myaccount.php">My Account</a>
                 <a href="Help.php">Help</a>   
            </div>
           

        </header>

        <center>
        <br>
        <!-------------------------------------------------------------------------->
        <!-- ------------------------------------Login form ------------------------>	
        <!-------------------------------------------------------------------------->
        <div class="form2">
            <br><br>
            <!-- Form image -->
            <img src="images/login1.jpg" class="avatar">

        <form action="login.php" method="POST" name="myForm">
            <br>
            <h2 style="color:  gold"> <i> <b>LogIn</b> </i> </h2>
            <label></label><br>

            Username<br>
            <input type="text" id="uname" name="username" style="width: 500px" placeholder="Enter Username" required><br><br>

            Password<br>
            <input type="Password" id="pw" name="password" style="width: 500px"pattren="[a-zA-Z0-9]{5,8}"placeholder="Enter password" required >

            <br><br><span class="forgot"><a style="color: white" href="Forget.html"> Forgot Password? </a></span><br><br><br>
            <a href="UserProfile.html"><input type="submit" class="submit" id="btnsub" name="submit" value="Submit"></a>

            <p style="text-align: center;font-size: 15px "><span> Not a memeber?</span><a style="color: white" href="register.php"> Sign Up </a></p>
        <br><br><br>
            </form>
        </div>
        </center>

<?php
        /////////////////////////////////////////////////////
        // Check if the user is submitting the login form ///
        /////////////////////////////////////////////////////
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) ) {
                $username = $_POST['username'];
                $password = $_POST['password'];

   
                ////////////////////////////////////////////////////////////////////
                //////////////// getting information query///////////////////////////
                //////////////////////////////////////////////////////////////////////
                $query = "SELECT UserID, Password FROM Users WHERE Username = '$username'";
                $result = $conn->query($query);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $hashedPassword = $row['Password'];
        
        
                    if ($password === $hashedPassword) {
                    // Password is correct, user is authenticated
                        session_start();
                        $_SESSION['user_id'] = $row['UserID']; // Store user ID in the session
                            ////////////////////////////////////////////////////////////////////////
                            ///////////////////////// role query ////////////////////////////////////
                        $query = "SELECT role FROM users WHERE username = '$username' AND password = '$hashedPassword';";

                         $result = $conn->query($query);

                         $row = $result->fetch_assoc();

                        $userRole = $row['role'];
            
                        // After successful login
                         if ($userRole === 'admin') {
                        // Redirect to the admin dashboard
                            header('Location: view.php');
                        } elseif ($userRole === 'user') {
                        // Redirect to the user dashboard
                             header('Location: index.php');
                        } else {
                        // Handle unauthorized access
                             echo 'Unauthorized access';
                        }
           
            
                    } else {
                        // Password is incorrect
            
                        $errorMessage = "Password is incorrect. Please try again.";
            
            
                    }
                } else {
                     // Username not found
                     $errorMessage = "Password is incorrect. Please try again.";
        
            }
    
   
        }
?>

 <?php if (isset($errorMessage)) { ?>
    <center><p style="color: red; font-size:larger"><?php echo $errorMessage; ?></p></center>
<?php } ?>
<!----------------------------->
<!--This is the foolter one -->
<!------------------------------>
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