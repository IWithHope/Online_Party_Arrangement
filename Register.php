<?php require_once('includes/connect.php'); ?>

<!DOCTYPE html>
<html>

<head>

    <title>Lanka Events</title>
  
    <link rel="stylesheet" href="styles/style.css">   
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/foot.css">

    
    <script type="text/javascript" src="js/register.js"></script>

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
         <a name=E></a>   
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
            
        <div class="form1">
            <br>
            <img src="images/reg.png" class="avatar">
        <!--------------------------------->
        <!--form go to the registerdb.php-->
        <!--------------------------------->
        <form action="Registerdb.php" method="POST">
            <h1 style="color:  gold"> <i>
            <b>Registration Form</b> </i> </h1>
            <br><br>
            <label></label>
            First Name<br>
            <input type="text" id="fname" name="fname" style="width: 500px" placeholder="Enter your first name" required><br><br>
            Last Name<br>
            <input type="text" id="lname" name="lname" style="width: 500px" placeholder="Enter your last name" required><br><br>
            Username<br>
            <input type="text" id="uname" name="username" style="width: 500px" placeholder="Pick a username" required><br><br>
            Gender<br>
            
             <label class="radio-inline"><input type="radio" id="gender" name="gender" value="male" checked>male</label>
             <label class="radio-inline"><input type="radio" id="gender" name="gender" value="female">femail</label><br>
             
             <br>
            Phone Number<br>
            <input type="text" id="mobile" name="phonenumber" style="width: 500px" placeholder="+94" required><br><br>
            Email Address<br>
            <input type="text" id="emailAdd" name="email" style="width: 500px" pattern="[a-zA-Z0-9._%+-#]+@[a-z0-9]+\.[a-z]{2,3}"placeholder="example@gmail.com"required><br><br>
            Address<br>
            <textarea id="address" name="address" rows="10" cols="50" style="width: 500px"placeholder="Enter your permanet address"required></textarea><br><br>
            Choose Your Date Of Birth <br>
            <input type="date" id="dob" name="dateofbirth"required><br><br>
            Password<br>
            <input type="Password" id="pw" name="password" style="width: 600px"pattren="[a-zA-Z0-9]{5,8}"placeholder="Enter your password"required><br><br>
            Re-enter Password<br>
            <input type="Password" id="repw" name="repassword" style="width: 600px"placeholder="Re-Enter password"required><br><br>
            Accept privace policy terms
            <input type="checkbox" id="policy" name="policy"  onclick="enableButton()"><br><br>
            
            <input type="submit" value="Submit Details" id="Register_btn1"  name="register" onclick="show_alert();">
        
            <br><br><br>
        </form>
        </div>
        </center>

<hr>
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
<?php mysqli_close($conn); ?>