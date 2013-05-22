<div id='crm_wrap'>
	<div id='crm_controls'>
		<button name="newClient" id="crm_newClient" value="Neuer Kunde" onclick=""></button>
		<form action='index.php' method="post">
			<input name="crm_clientID" type="text" id="crm_input_clientID" maxlength="5" />
			<input type="submit" value="öffnen" />
		</form>
		<button name="findClient" id='crm_findClient' value="Suche Kunde" onclick=""></button>
	</div>
	<?php
	// IF POST!===NULL --> $id = $POST_id; eELSE id=0
	include_once 'crm_Kundenprofil.php';
	include_once 'crm_kaufhistorie.php';
	include_once 'crm_kontaktverlauf.php';
	?>
</div>
