<html>
    <head>
        <link rel="stylesheet" href="./styles/view.css">
    </head>

    <body>
    <a href="logout.php"><button>Log Out</button></a>
    <a href="view.php"><button>view</button></a>
    <div class="admin-panel">
        <h2>Feedback</h2>

        <div class="table-container">

        <table class="table" >
            <thead>
                <tr>
                <th>UserID</th>
                <th>Event Date</th>
                <th>Event Type</th>
                <th>Experience</th>
                <th>Food</th>
                <th>Entertainment</th>
                <th>Decoration</th>
                <th>Suggestion</th>
                <th>Future_Party</th>
                <th>Comment</th>
                 </tr>
            </thead>
         
        <?php
          
           
           include_once('./includes/connect.php');
            /////////////////////////////////////////////////////
            ////////// feedback view ///////////////////////////
            ///////////////////////////////////////////////////
            $query = "SELECT * FROM feedback";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['UserID']."</td>";
                echo "<td>".$row['Date']."</td>";
                echo "<td>".$row['Type']."</td>";
                echo "<td>".$row['Experience']."</td>";
                echo "<td>".$row['Food']."</td>";
                echo "<td>".$row['Entertainment']."</td>";
                echo "<td>".$row['Decoration']."</td>";
                echo "<td>".$row['Suggestion']."</td>";
                echo "<td>".$row['Future_Party']."</td>";
                echo "<td>".$row['Comment']."</td>";
                
                
                echo "</tr>";
            }
            
        ?>
        </table>

        </div>
    </body>
</html>


