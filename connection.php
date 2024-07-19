<?php

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lankan_medical";				//Provide our database name 

    $conn = new mysqli($servername, $username,$password, $dbname);

    if ($conn->connect_error) {                                      
        die("Connection failed: " . $conn->connect_error);      //checcking the database is connected sucessfully or not ,if not it shows the error message 
    }
	else{
		echo ("Connection sucess");
	}
?>