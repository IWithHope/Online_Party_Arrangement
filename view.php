<?php require_once('./connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./styles/view.css">

    <script>
        // Disable the back button
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });
    </script>
</head>
<body>
      
    <a href="feedbackview.php"><button>feedback</button></a>
    <a href="logout.php"><button>Log Out</button></a>

    <div class="admin-panel">
        <h2>Manage Parties</h2>

        <div class="table-container">

        <table class="table" >
            <thead>
                <tr>
                <th>Party_ID</th>
                <th>User_ID</th>
                <th>Event_Name</th>
                <th>Event_Date</th>
                <th>Event_Time</th>
                <th>Location</th>
                <th>No_Guests</th>
                <th>Actions</th>
                 </tr>
            </thead>
         
        <?php
          
           
           
            ////////////////////////////////////////////////
            ////////// select all parties from database////
            ///////////////////////////////////////////////
            $query = "SELECT * FROM Parties";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['PartyID']."</td>";
                echo "<td>".$row['UserID']."</td>";
                echo "<td>".$row['Event_Name']."</td>";
                echo "<td>".$row['Event_Date']."</td>";
                echo "<td>".$row['Event_Time']."</td>";
                echo "<td>".$row['Event_Location']."</td>";
                echo "<td>".$row['NO_Guest']."</td>";
                
                echo "<td><a href='edit_party.php?id=".$row['PartyID']."'><button>Edit</button></a> | <a href='delete_party.php?id=".$row['PartyID']."'><button onclick='deleteItem()'>Delete</button></a></td>";
                echo "</tr>";
            }
            
        ?>
        </table>

        </div>
       
        <h2>Manage Users</h2>

        <div class="table-container">
             
        <table class="table">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Username</th>
            <th>Gender</th>
            <th>Phone_Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Date_of_Birth</th>
            <th>Password</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        
        <?php
            ///////////////////////////////////////////////////////////
             //////////// select all users in database ////////////////
             //////////////////////////////////////////////////////////           
            $query = "SELECT * FROM Users";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['UserID']."</td>";
                echo "<td>".$row['Fname']."</td>";
                echo "<td>".$row['Lname']."</td>";
                echo "<td>".$row['Username']."</td>";
                echo "<td>".$row['Gender']."</td>";
                echo "<td>".$row['PhoneNumber']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['Address']."</td>";
                echo "<td>".$row['DateofBirth']."</td>";
                echo "<td>".$row['Password']."</td>";
                echo "<td>".$row['role']."</td>";
                echo "<td><a href='edit_user.php?id=".$row['UserID']."'><button>Edit</button></a> | <a href='delete_user.php?id=".$row['UserID']."'><button onclick='deleteItem()'>Delete</button></a></td>";
                echo "</tr>";
            }
            $conn->close();
        ?>
        </table>
        </div>
        
    </div>

    <!----------------------------java script code----------------------------->
    <script>
         function deleteItem() {
            // Display a confirmation dialog
            if (confirm("Are you sure you want to delete this ?")) {
                // Perform the deletion (you can make an AJAX request here)

                // Show a notification
                showNotification("This deleted successfully.");
            }
            
        }

        function showNotification(message) {
            alert(message);
        }
        
    </script>
   
</body>
</html>
