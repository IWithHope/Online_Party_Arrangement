<?php


include_once('./includes/connect.php');

session_start(); // Start the session (if not already started)
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $email = $_POST["email"];
        $comment = $_POST["comment"];
      

       
       
    
        
            
        //////////////////////////////////////////////////////////////////////////////
        // /////Insert contact admin data data into the existing table /////////////////////
        //////////////////////////////////////////////////////////////////////////////
        $insertSQL = "INSERT INTO contact (UserID, Email , Comment  ) VALUES ('$user_id', '$email', '$comment')";
    
            if ($conn->query($insertSQL) === TRUE) {
                
    
            } else {
                
            }
    
            // Close the database connection
            
    }
    else {
       
    }

    
    
} else {
    header('Location:login.php');
};









?>






<html>
<head>


  <title>Help & support</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/foot.css">
        <link rel="stylesheet" href="./styles/help.css">
        <script src="1.js"></script>
        

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
                           
                 <a href="index.php">Home</a>
                 <a  href="about.php" >About Us</a>
                 <a  href="services.html"> Services</a>
                 <a  href="gallery.html"> Gallery</a>
                 <a href="party.php">Party</a>
                 <a href="feedback.php">feedback</a>
                 <a href="myaccount.php">My Account</a>
                 <a href="Help.php" class="active">Help</a>
                 
            </div>
           
        </header>

        <hr>




<!..outline..>
<div class=top>
<img class=img2 src=./images/logo.png>
<h2>Help & Support</h2>
</div>

<div class=h1>
<h1>How Can We Help?</h1>
</div>

<div class="contain">
  <div align="center;" class="social">
    <a href="#2"><img src="./images/reg.png" alt="" width="300" height="300" /></a>
    <figcaption>Registration Problem</figcaption>
  </div>
  <div align="center;" class="social">
    <a href="#3"><img src="./images/evnt.png" alt="" width="300" height="300" /></a>
    <figcaption>Plannig Problem</figcaption>
  </div>
  <div align="center;" class="social">
    <a href="#4"><img src="./images/admin.png" alt="" width="300" height="300" /></a>
    <figcaption>Contact Admin</figcaption>
  </div>


<div>

<h2 style="text-align:left; padding:20px;"><a name="2">Registration Problem</a></h2>
<h3 >+ How can I login-in my account?</h3>
<div class="reg">
  <div align="center;" class="social">
  <img src="./images/step1.png" alt="" width="300" height="300" />
  <figcaption>Step 1</figcaption>
  </div> 
  <div align="center;" class="social">
  <img src="./images/step2.png" alt="" width="300" height="300" />
  <figcaption>Step 2</figcaption>
  </div> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="text-decoration:bold; font-size:20; text-align:left">If you do not have an account, then please click the button called "Sign Up" and fill the Registration form."</p>
<br>


<h3 > + I froget my password. How can I log-in?</h3>
<img src="./images/step1.png" alt="" width="300" height="300" align=left />

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<h3 > + How can I log-out from my account?</h3>




<h2 style="text-align:left; padding:20px;"><a name="3">Planning Problem</a></h2>
<h3 > + Can I update the number of guests that we are expecting?</h3>
<p style="text-decoration:bold; font-size:20; text-align:left">Yes,you have to contact the admin.</p>

<h3 > + Can I change the venue?</h3>
<p style="text-decoration:bold; font-size:20; text-align:left">Yes, you can. But You have to inform it before a month.</p>



<h2 style="text-align:left; padding:20px;"><a name="4">Contact Admin</h2> 
<form align="left" method="post"  action="Help.php" name="myForm">

Email Address :- <input type="email" name="email" required><br><br>
Comment :- 
<br>
<textarea  input type="text" name="comment" required></textarea><br><br>
		<input type="submit" value="Submit" name="submit" >
	</form>

</div>






</body>
</html>