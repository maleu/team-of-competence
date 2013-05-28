<html>
<head>
	<?php
		include("nav.js");
		ini_set ("display_errors", "1");
		error_reporting(E_ALL);
	?>
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="CRM/crm_style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
			loadHomepage();
		});
	</script>
</head>
<body>

<div class=container>
	<div class=header>
		<div class=logo>
			
		</div>
		<div class=headerRight>
			<div class=headerMenu>
				<div class=headerMenuElement>
					FAQ
				</div>
				<div class=headerMenuElement>
					Kontakten
				</div>
					
			</div>
			<div class=headerAccount>
				<ul>
					<li>Login</li>
				</ul>
			</div>
		</div>
	</div>
	<div class=body>
		<div class=hauptnav>
			<div class=hauptNavElement>
				Startseite
			</div>
			<div class=hauptNavElement>
				<a href="#" onClick="loadCRMmain('1');">CRMmain</a>
				<ul>
				<li><a href="#" onClick="loadCRMtest();">CRMtest</a></li>
				</ul>
			</div>
			<div class=hauptNavElement>
				Kalender
			</div>
			<div class=hauptNavElement>
				Posteingang
			</div>
		</div>
		<div id="content" class=content>
			Wird ersetzt.
		</div>
	</div>
</div>

<script language="JavaScript">
	loadHomepage();
</script>

</body>

</html>
