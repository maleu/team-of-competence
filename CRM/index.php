<div id='crm_wrap'>
	<div id='crmControls'>
		<button class='crmNav' name="newClient" id="crm_newClient" value="new">Neuer Kunde</button>
		<button name="findClient" class='crmNav' id='crm_findClient' value="search">Suche Kunde</button>
		<form action='index.php' method="post">
			<input name="crm_clientID" type="text" class='crmNav' id="crm_input_clientID" maxlength="5" />
			<input type="submit" value="öffnen" class='crmNav' />
		</form>
		<div id='clearfloat'> </div>
	</div>
	<?php
	// IF POST!===NULL --> $id = $POST_id; eELSE id=0
	include_once 'crm_kundenprofil.php';
	include_once 'crm_kaufhistorie.php';
	include_once 'crm_kontaktverlauf.php';
	?>
</div>
