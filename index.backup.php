<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<?php
		include("nav.js");
		ini_set ("display_errors", "1");
		error_reporting(E_ALL);
	?>
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="CRM/crm_style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div class=container>
	<div id="loginError" style="display:none">
		Login fehlgeschlagen!
	</div>
	<form name="loginForm" method="post" action="checkLogin.php">
	<div id="loginMaske">
		Benutzername: <br />
		<input type="text" name="loginBenutzername" id="loginBenutzername"><br />
		Passwort: <br />
		<input type="password" name="loginPasswort" id="loginPasswort"><br />
		<input type="submit" id="loginSubmit" value="Abschicken">
                
                <select name="role">
                    <option value="hr">HR</option>
                    <option value="fibu">FIBU</option>
                    <option value="gf">GF</option>
                    <option value="lager">Lager</option>
                </select>
	</div>
	</form>
</div>
</body>

</html>