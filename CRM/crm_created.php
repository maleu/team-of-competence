<div id='crm_wrap'>
	<?php echo 'TEST: ' . $id; ?>
	<div id='crmControls'>
		<button class='crmNav' name="newClient" onclick="crm_createClient()" id="crm_newClient" value="new">
			Neuer Kunde
		</button>
		<button name="findClient" class='crmNav' id='crm_findClient' value="search">
			Suche Kunde
		</button>
		<form>
			<input name="crm_clientID" type="text" class='crmNav' id="crm_input_clientID" onkeydown="if (event.keyCode == 13) document.getElementById('crm_openByIDButton').click()" maxlength="5" />
			<button type="button" id='crm_openByIDButton' onclick="crm_openClientbyID()" class='crmNav'>
				Aufrufen
			</button>
		</form>
		<div id='clearfloat'></div>
	</div>

	<?php
	if (isset($_POST['P_nachname'])) {
		if (get_magic_quotes_gpc()) { $_POST = array_map('stripslashes', $_POST);
		}
		$vorname = $_POST['P_vorname'];
		$nachname = $_POST['P_nachname'];
		$firma = $_POST['P_firma'];
		$Strasse = $_POST['P_strasse'];
		$Postleitzahl = $_POST['P_plz'];
		$Ort = $_POST['P_ort'];
		$Telefonnummer = $_POST['P_tel'];
		$Email = $_POST['P_email'];
		$KundenID = $_POST['P_kunden'];
		$MitarbeiterID = $_POST['P_mitarbeiter'];
		echo($vorname . " " . $nachname. $Telefonnummer);

		include_once 'db_connect.php';
		if (mysqli_connect_errno() == 0) {
			$sql = 'INSERT INTO `Kunden` (`Vorname`, `Nachname`, `Firma`, `KundenID`, `MitarbeiterID`,`Strasse`, `PLZ`, `Ort`, `Telefon`, `Email`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
			$insert = $db -> prepare($sql);
			$insert -> bind_param('sssiisisis', $vorname, $nachname, $firma, $KundenID, $MitarbeiterID, $Strasse, $Postleitzahl, $Ort, $Telefonnummer, $Email);
			$insert -> execute();

			if ($insert -> affected_rows == 1) {
				echo('Neukunde ' . $vorname . ' ' . $nachname . ' wurde erfolgreich erstellt :)');
			} else {
				echo 'Der Kunde konnte nicht erstellt werden...'.mysqli_error($db);
			}
		} else {
			echo("<div id='dbcon'>No DB COnnection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
		}
		//$db->close();
	} else {
		echo "Es wurde kein Formular ausgefüllt";
	}
?>
</div>
