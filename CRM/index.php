<div id='crm_wrap'>
	<?php 
	$id = $_POST['P_id'];
	echo 'TEST: '.$id; ?>
	<div id='crmControls'>
		<button class='crmNav' name="newClient" id="crm_newClient" onclick="crm_createClient()" value="new">Neuer Kunde</button>
		<button name="findClient" class='crmNav' id='crm_findClient' value="search">Suche Kunde</button>
		<form>
			<input name="crm_clientID" type="text" class='crmNav' id="crm_input_clientID" onkeydown="if (event.keyCode == 13) document.getElementById('crm_openByIDButton').click()" maxlength="5" />
			<button type="button" id='crm_openByIDButton' onclick="crm_openClientbyID()" class='crmNav'>Aufrufen</button>
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
