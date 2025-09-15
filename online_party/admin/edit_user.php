<?php
include_once('../admin/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission to update the user
    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    // You should hash the password securely, for example, using password_hash
    

    $query = "UPDATE Users SET Username = '$username', Email = '$email', Password = '$password' WHERE UserID = $userID";
    
    if ($conn->query($query) === TRUE) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . $conn->error;
    }
    
   
} else {
    // Display the form to edit the user details
    $userID = $_GET['id'];

   

    $query = "SELECT * FROM Users WHERE UserID = $userID";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['Username'];
        $email = $row['Email'];
    }
    
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post">
        <input type="hidden" name="userID" value="<?php echo $userID; ?>">
        <label>Username: <input type="text" name="username" value="<?php echo $username; ?>" required></label><br><br>
        <label>Email: <input type="email" name="email" value="<?php echo $email; ?>" required></label><br><br>
        <label>Password: <input type="password" name="password" placeholder="New Password (leave blank to keep current)"></label><br><br>
        <input type="submit" value="Update User">
    </form>
</body>
</html>
