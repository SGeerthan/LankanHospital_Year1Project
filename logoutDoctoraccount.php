<?php
	
	 session_start();
		if(isset($_GET["logout"]))
		{
			session_unset();	    //Ending the session 
			session_destroy();
			header("Location:Lankan.html");
		}
	
?>