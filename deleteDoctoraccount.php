<?php
session_start();
require 'connection.php';

if(isset($_GET["delete"])){                       
	
    $loginname = $_SESSION["username"];
    $loginpassword = $_SESSION["password"];

    $sql = "DELETE FROM doctor_details WHERE user_name='$loginname' AND password='$loginpassword'";   //Delete queires to delete the account
	
    if ($conn->query($sql) === TRUE) {																  //Executing the query
        echo "<style>alert('Account deleted successfully');</style>";
    } else {
        echo "Error deleting account: " . $conn->error;
    }
	
    header("Location:login.html");
    exit;
}
$conn->close();
?>
