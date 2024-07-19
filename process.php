<?php

if (isset($_POST["btnsubmit"])) {
   
    $name = $_POST["Name"];
    $userName = $_POST["Username"];
    $email = $_POST["Mail"];
    $userpassword = $_POST["Password"];
    $contactNo = $_POST["contactNo"];
  
	require 'connection.php'; 
	
	/*Query for inserting value into the table*/
    $sqlquery ="INSERT INTO doctor_details(name,user_name,email,password,contact_number) VALUES ('$name','$userName','$email','$userpassword','$contactNo')";
	
	if($conn->query($sqlquery)){
		
		echo ("Inserted successfully");
	}
	else {
		
		echo ("Error: ". $conn->error);
	}
	
    $conn->close();

    echo "<script>alert('Successfully Registered');</script>";
	
	header("Location: login.html");
}
?>
