<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $partyID = $_GET['id'];
   
    include_once('../admin/connect.php');

    // Perform the deletion
    $query = "DELETE FROM Parties WHERE PartyID = $partyID";
    if ($conn->query($query) === TRUE) {
       
        header("Location: view.php");
    } else {
        echo "Error deleting party: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request or missing PartyID.";
}
?>
<html>
    <head>
   
    </head>

    <body>
    <div class="notification" id="notification"></div>
   
    </body>
</html>
