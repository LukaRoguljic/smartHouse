<?php
include('connection.php');


if(ctype_alnum($_POST['username'])){
	
	//test for duplicate names
	$query="SELECT * FROM users WHERE username = '$_POST[username]'";
	$result=mysqli_query($dbc,$query);
	$num=mysqli_num_rows($result);
	
	if($num == 0){
		
		//test for duplicate email
		$query2="SELECT * FROM users WHERE email = '$_POST[email]'";
		$result2=mysqli_query($dbc,$query2);
		$num2=mysqli_num_rows($result2);
		
			if($num2 == 0){
				//if emails and passwords match up
				if($_POST['password'] == $_POST['password2'] && $_POST['email'] == $_POST['email2']){
					
					strip_tags($_POST['name']);
					strip_tags($_POST['lastname']);
					strip_tags($_POST['username']);
					strip_tags($_POST['email']);
					strip_tags($_POST['password']);
					//Insert data into database
					$sql = "INSERT INTO users SET name = '$_POST[name]',lastname = '$_POST[lastname]' ,username = '$_POST[username]', password = '$_POST[password]', email = '$_POST[email]' ";
				    $result=mysqli_query($dbc,$sql);
					echo "Hvala na prijavi!<br>";
					echo "<a href='index.html'>Vratite se i prijavite se na sustav</a><br>";
				}	
				else{echo "Lozinka i ponovljena lozinka nisu iste ili email i ponovljeni email nisu isti!<br>";
				echo "<a href='registration.html'>Ponovno pokušajte</a><br>";}
			}
	else{
		echo "Ova e-mail adresa se već koristi!<br>";
		echo "<a href='registration.html'>Ponovno pokušajte</a><br>";
	}
	}else{
		echo "Vaše željeno korisničko ime se već koristi<br>";
		//echo "<a href='registration.html'>Ponovno pokušajte</a><br>";
		} 	
	}
	else{
		echo "Unesite Vaše korisničko ime sa alfanumeričkim znakovima [A-Z] [a-z] [0-9]<br>";}	// insert include('xxxxx.html'); GO BACK TO REGISTER TRY ANOTHER USERNAME
		echo "<a href='registration.html'>Ponovno pokušajte</a><br>";

?>