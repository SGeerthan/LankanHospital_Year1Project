<?php
	session_start();
	require'connection.php';
	if (isset($_POST["change"])){

	$username = $_SESSION["username"];                   //Giving a session global variable follow the user name in other pages
	$newpassword = $_POST["newpassword"];
	
	$sql = "UPDATE doctor_details SET password='$newpassword' WHERE user_name='$username'";    //Update queires to update the password

	if ($conn->query($sql) === TRUE) {														   //Executing the query
		echo "<script>alert('Password updated successfully');</script>";
  } else {
		echo "Error updating account: " . $conn->error;
  }
   header("Location:login.html");
   exit;
}

$conn->close();
?>
