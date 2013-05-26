<div id='crm_wrap'>
	<?php 
	$vorname = $_POST['P_vorname'];
	$nachname = $_POST['P_nachname'];
	echo 'TEST: '.$id; ?>
	<div id='crmControls'>
		<button class='crmNav' name="newClient" onclick="crm_createClient()" id="crm_newClient" value="new">Neuer Kunde</button>
		<button name="findClient" class='crmNav' id='crm_findClient' value="search">Suche Kunde</button>
		<form>
			<input name="crm_clientID" type="text" class='crmNav' id="crm_input_clientID" onkeydown="if (event.keyCode == 13) document.getElementById('crm_openByIDButton').click()" maxlength="5" />
			<button type="button" id='crm_openByIDButton' onclick="crm_openClientbyID()" class='crmNav'>Aufrufen</button>
		</form>
		<div id='clearfloat'> </div>
	</div>
	<?php
	// IF POST!===NULL --> $id = $POST_id; eELSE id=0
	//include_once 'crm_kundenprofil.php';
	//include_once 'crm_kaufhistorie.php';
	//include_once 'crm_kontaktverlauf.php';
	echo('Neukunde '.$vorname.' '.$nachname.' wurde erfolgreich erstellt :)');
	?>
</div>
