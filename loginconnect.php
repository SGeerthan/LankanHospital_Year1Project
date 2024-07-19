<?php

session_start();

require 'process.php';
require 'connection.php';

if (isset($_POST['submitlogin'])) {
	
  $loginname = $_POST['username'];
  $loginpassword = $_POST['password'];

  $sqlquery = "SELECT * FROM doctor_details WHERE user_name='$loginname' AND password='$loginpassword'";  /*Select column from table*/
  
  $result = $conn->query($sqlquery);					/*Executing the query*/

  if ($result->num_rows > 0) {
	  
    $row = $result->fetch_assoc();						/*Date fetching from database table*/
    $_SESSION['username'] = $row['user_name'];
    $_SESSION['password'] = $row['password'];
	
    header("Location: doctorpage.html");
	
    exit();
  }
  else {
    echo "<script>alert('Invalid username or password');</script>";
  }
} 
else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>