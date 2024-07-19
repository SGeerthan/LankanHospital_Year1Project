<?php

if (isset($_POST["usersubmit"])) {
   
    $uname = $_POST["UName"];                     //Reading data from HTML form
    $uuserName = $_POST["UUsername"];
    $uemail = $_POST["UMail"];
    $uuserpassword = $_POST["UPassword"];
    $ucontactNo = $_POST["UcontactNo"];
  
	require 'connection.php'; 
	//Inserting values into the table 
    $query ="INSERT INTO user_details(patient_name,patient_user_name,patient_email,patient_password,patient_contact_number) VALUES ('$uname','$uuserName','$uemail','$uuserpassword','$ucontactNo')";
	
	if($conn->query($query)){
		
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
