   



<?php 

include_once('./includes/connect.php');

session_start(); // Start the session (if not already started)
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    
} else {
    header("Location: login.php");
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $event_name = $_POST["event_name"];
    $event_date = $_POST["event_date"];
    $event_time = $_POST["event_time"];
    $event_location = $_POST["event_location"];
    $event_guests = $_POST["event_guests"];
   

    // Validate user_id and other fields (add more robust validation)
    if (empty($user_id) || empty($event_name) || empty($event_date) || empty($event_time) || empty($event_location)|| empty($event_guests)) {
        echo "Please fill in all the required fields, including the User ID.";
    } else {
        
        ///////////////////////////////////////////////////
        // Insert the party data into the existing table//
        ///////////////////////////////////////////////////
        $insertSQL = "INSERT INTO parties (UserID, Event_Name, Event_Date, Event_Time, Event_Location, NO_Guest)
                      VALUES ('$user_id', '$event_name', '$event_date', '$event_time', '$event_location',$event_guests)";

        if ($conn->query($insertSQL) === TRUE) {
            
            header("Location: party.php");

        } else {
            
        }

       
           
        // Close the database connection
        $conn->close();
    }
} else {
   
}
?>




<!DOCTYPE html>
<html>

<head>

    <title>Party Arrangement Form</title>

    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="./styles/party.css">
    <link rel="stylesheet" href="styles/foot.css">

    <script src="./js/script.js"></script>
    
</head>



<body id="mainBody">


    <header class="head">
       
        <div class="TopNavigation">
            
            <ul class="navbar1_left">
                <!-- <li class="li_left_C"><a href="#"><i class="sIconHome"></i></a></li> -->
                <li class="li_left_C"><a href="Login.php#D">Log In</a></li>
                <li class="li_left_C"><a href="Register.php#E">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94412256879</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@Lankaproperty.lk</b></li>
            </ul>
            
        </div>

        <div class="SecNavBar">
            
        <img src="./images/bg1.jpg" class="header_image">
            
        <a href="index.php" >Home</a>
                 <a  href="about.php">About Us</a>
                 <a  href="services.html"> Services</a>
                 <a  href="gallery.html"> Gallery</a>
                 <a href="party.php"class="active" >Party</a>
                 <a href="feedback.php">feedback</a>
                 <a href="myaccount.php">My Account</a>
                 <a href="Help.php">Help</a>
        </div>
        
    </header>
    

    <!-- Representing the form-->
    <div class="arrangement">

        
        <div class="party-form">

        

        <div class="form-container">
        <h1>Party Arrangement Form</h1>
       
        <form action="party.php" method="post" name="myForm">


        <label for="event_name">Event Name:</label>
        <select id="color" name="event_name">
            <option value="Birthday Party">Birthday Party</option>
            <option value="Wedding">Wedding</option>
            <option value="Anniversary">Anniversary</option>
            <option value="Corporate Event">Corporate Event</option>
        </select>

        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date" required><br><br>

        <label for="event_time">Event Time:</label>
        <input type="time" id="event_time" name="event_time" required><br><br>

        <label for="event_location">Event Location:</label>
        <input type="text" id="event_location" name="event_location" required><br><br>

        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="event_guests" required>



         <button type="submit" onclick="func()">Submit</button>
        </form>
        <div id="notification_1" style="display: none; background: #4CAF50; color: white; text-align: center; padding: 10px;">Submission Successful!</div>
            <div id="notification_2" style="display: none; background: red; color: white; text-align: center; padding: 10px;">Submission Unsuccessful!</div>
        </div>
    </div>
    </div>
    
    <script type="text/javascript" src="./js/welcome.js">
      
    </script>

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
