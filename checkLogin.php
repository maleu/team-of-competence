<?php

//  DB CONNECT 


$benutzername = $_POST['loginBenutzername'];
$passwort = $_POST['loginPasswort'];

// To protect MySQL injection
// $benutzername = stripslashes($benutzername);
// $benutzername = stripslashes($benutzername);
// $passwort = mysql_real_escape_string($passwort);
// $passwort = mysql_real_escape_string($passwort);

//  SQL ABFRAGE

//$count=mysql_num_rows($result);
// echo $benutzername. "<br />".$passwort;
if ($benutzername == "user" && $passwort == "test"){
	$count = 1;
}

if($count == 1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("benutzername");
// session_register("passwort");
header("location:main.php?role=".$_POST['role']);
}
else {
echo "<span style='background-color:red'>Wrong Username or Password</span>
	<form name='loginForm' method='post' action='checkLogin.php'>
	<div id='loginMaske'>
		Benutzername: <br />
		<input type='text' name='loginBenutzername' id='loginBenutzername'><br />
		Passwort: <br />
		<input type='password' name='loginPasswort id='loginPasswort'><br />
		<input type='submit' id='loginSubmit' value='Abschicken'>
	</div>
	</form>";
}
?>