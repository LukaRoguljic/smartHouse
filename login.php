<?php
include('connection.php');
session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($dbc,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbc,$_POST['password']); 
      $sql        = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result     = mysqli_query($dbc,$sql);
      $row        = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count      = mysqli_num_rows($result);

      if($count == 1) 
      {
         
         $_SESSION['login_user'] = $myusername;
         header("location: lesson.php");
      }
      else 
      {
         header("location: index.html");
      }
   }
?>