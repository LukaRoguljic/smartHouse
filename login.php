<?php

session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
	  // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($myusername == 'user1' && $mypassword == 'user1') {
         
         $_SESSION['login_user'] = $myusername;
         header("location: index.html");
      }else {
         header("location: index.html");
      }
   }

?>