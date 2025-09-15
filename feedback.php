   



<?php 

include_once('./includes/connect.php');

session_start(); // Start the session (if not already started)
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $partyDate = $_POST["partyDate"];
        $partyType = $_POST["partyType"];
        $overallExperience = $_POST["overallExperience"];
        $foodDrinks = $_POST["foodDrinks"];
        $entertainment = $_POST["entertainment"];
        $decorations = $_POST["decorations"];
        $suggestions = $_POST["suggestions"];
        $futureParties = $_POST["futureParties"];
        $additionalComments = $_POST["additionalComments"];

       
       
    
        
            
        //////////////////////////////////////////////////////////////////////////////
        // /////Insert the feedback data data into the existing table /////////////////////
        //////////////////////////////////////////////////////////////////////////////
        $insertSQL = "INSERT INTO feedback (UserID, Date , Type , Experience ,Food , Entertainment , Decoration ,Suggestion , Future_Party,Comment  )
                          VALUES ('$user_id', '$partyDate', '$partyType', '$overallExperience', '$foodDrinks','$entertainment','$decorations','$suggestions','$futureParties','$additionalComments')";
    
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






<!DOCTYPE html>
<html>

<head>

    <title>Invited Guests Form</title>

    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/foot.css">
    <link rel="stylesheet" href="./styles/invited.css">
    
    
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
                 <a  href="about.php">About Us</a>
                 <a  href="services.html"> Services</a>
                 <a  href="gallery.html"> Gallery</a>
                 <a href="party.php" >Party</a>
                 <a href="feedback.php"class="active" >feedback</a>
                 <a href="myaccount.php">My Account</a>
                 <a href="Help.php">Help</a>
        </div>
        
    </header>
    

    <!-- Representing the form-->
<br>
    <h2>Party Feedback Form</h2>
    <form id="feedbackForm" action="feedback.php" method="post">
     
        <label for="partyDate">Date of the Party:</label>
        <input type="date" id="partyDate" name="partyDate" required><br>

        <label for="partyType">Type of Party:</label>
        <select id="partyType" name="partyType" required>
            <option value="Birthday">Birthday</option>
            <option value="Anniversary">Anniversary</option>
            <option value="Holiday">Holiday</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="overallExperience">Overall Experience:</label>
        <select id="overallExperience" name="overallExperience" required>
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Fair">Fair</option>
            <option value="Poor">Poor</option>
        </select><br>

        <label for="foodDrinks">Food and Drinks:</label>
        <select id="foodDrinks" name="foodDrinks" required>
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Fair">Fair</option>
            <option value="Poor">Poor</option>
        </select><br>

        <label for="entertainment">Entertainment:</label>
        <select id="entertainment" name="entertainment" required>
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Fair">Fair</option>
            <option value="Poor">Poor</option>
        </select><br>

        <label for="decorations">Decorations and Ambiance:</label>
        <select id="decorations" name="decorations" required>
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Fair">Fair</option>
            <option value="Poor">Poor</option>
        </select><br>

        <label for="suggestions">Suggestions for Improvement:</label>
        <textarea id="suggestions" name="suggestions" rows="4" cols="50"></textarea><br>

        <label for="futureParties">Would You Attend Our Future Parties?</label>
        <div class="radios">
            <input type="radio" id="yes" name="futureParties" value="Yes" required> Yes
            <input type="radio" id="no" name="futureParties" value="No" required> No
            <input type="radio" id="maybe" name="futureParties" value="Maybe" required> Maybe<br>
        </div>
        

      

        <label for="additionalComments">Any Additional Comments or Feedback:</label>
        <textarea id="additionalComments" name="additionalComments" rows="4" cols="50" ></textarea>
        
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
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