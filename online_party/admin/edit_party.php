<?php
include_once('../admin/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission to update the party
    $partyID = $_POST['partyID'];
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $event_location = $_POST['event_location'];
    $event_guests = $_POST['event_guests'];


   

    $query = "UPDATE Parties SET Event_Name = '$event_name', Event_Date = '$event_date', Event_Time = '$event_time' , No_Guests = $event_guests, Event_Location = '$event_location'  WHERE PartyID = $partyID";
    
    if ($conn->query($query) === TRUE) {
        echo "Party updated successfully.";
    } else {
        echo "Error updating party: " . $conn->error;
    }
    
  
} else {
    // Display the form to edit the party details
    $partyID = $_GET['id'];

    

    $query = "SELECT * FROM Parties WHERE PartyID = $partyID";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $event_name = $row['Event_Name'];
        $event_date = $row['Event_Date'];
        $event_time = $row['Event_Time'];
        $event_location = $row['Event_Location'];
        $event_guests = $row['No_Guests'];
    }
    
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Party</title>
</head>
<body>
    <h1>Edit Party</h1>
    <form method="post">
        <input type="hidden" name="partyID" value="<?php echo $partyID; ?>">
        <label>Event Name: <input type="text" name="event_name" value="<?php echo $event_name; ?>" required></label><br><br>
        <label>Event Date : <input type="date" name="event_date" value="<?php echo $event_date; ?>" required></label><br><br>
        <label>Event Time : <input type="time" name="event_time" value="<?php echo $event_time; ?>" required></label><br><br>
        <label>Event Location: <input type="text" name="event_location" value="<?php echo $event_location; ?>" required></label><br><br>
        <label>Number of Guests: <input type="number" name="event_guests" value="<?php echo $event_guests; ?>" required></label><br><br>
        <input type="submit" value="Update Party">
    </form>
</body>
</html>
