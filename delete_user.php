<?php
include_once('./includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $userID = $_GET['id'];

    

    // Perform the deletion
    $query = "DELETE FROM Users WHERE UserID = $userID";
    if ($conn->query($query) === TRUE) {
        header("Location: view.php");
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request or missing UserID.";
}
?>
