 <?php header('Content-Type: text/html;charset=utf-8'); ?> 
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
//		$( document ).ready(function() {
//			loadHomepage();
//		});
	</script>
        
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
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
		<div id="content" class=content style="border: 1px solid red;">
                    <?php // include "FIBU/gehaltabrechnungErstellen.php"; ?>
                    <?php // include 'FIBU/lohnGehaltUeberweisen.php'; ?>
                    <?php // include 'FIBU/krankenkasseUeberweisen.php'; ?>           
                   <?php // include 'Fibu/finanzamtmeldungErstellen.php';?>
                   <?php // include'lohnGehaltsAendern.php';?>
                    <?php // include'lohsteuerUeberweisung.php';?>
                     <?php // include'zahlungAnweisen.php';?>
                   
                    <?php include 'FIBU/wareingangsrechnungLieferantEditieren.php'; ?>
		</div>
	</div>
</div>

<script language="JavaScript">
//	loadHomepage();
</script>

</body>

</html>
