<?php require_once('includes/connect.php'); ?>

<?php
	if(isset($_POST['register'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username =$_POST['username'];
		$gender = $_POST['gender'];
		$phonenumber = $_POST['phonenumber'];
		$email = $_POST['email'];
		$address =$_POST['address'];
		$dateofbirth = $_POST['dateofbirth'];
		$password = $_POST['password'];
		///////////////////////////////////////////////////////////////////////////////////////
		////////////////////////////for enter the details in users table  ////////////////////
		//////////////////////////////////////////////////////////////////////////////////////
		$query = "INSERT INTO Users (Username, Email, Password, Fname, Lname, Gender, PhoneNumber, Address, DateofBirth) VALUES ('$username', '$email', '$password', '$fname' , '$lname' , '$gender' , '$phonenumber', '$address' , '$dateofbirth' )";
		$result = mysqli_query($conn,$query);

		if($result){
              header("Location:login.php");
            exit();
          
            }
        else{
            echo"<script>alert('Not Saved Your Details')</script>";
        }
	}

	mysqli_close($conn);
?>
