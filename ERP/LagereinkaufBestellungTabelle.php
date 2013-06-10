<?php
include_once ('db_connect.php');

$prodNummer = $_POST['prodNummer'];
$prodName = $_POST['prodName'];

// if (mysqli_connect_errno() == 0) {
	// $sql = "SELECT * FROM EinkaufBestellung WHERE Produktnummer = $produknummer;";
	// $result = $db -> prepare($sql);
	// $result -> execute();
	// $result -> store_result();
	// $num_rows = $result -> num_rows();
	// if ($num_rows !== 0) {
		// $result -> bind_result($produktNummer, $produktBezeichnung, $nettoPreis, $lieferant);
		// while ($result -> fetch()) {
			// echo '
				// <div class=lagerBestellungTabelleZeile>
					// <div class=lagerBestellungTabelleBElement>
						// $produktNummer
					// </div>
					// <div class=lagerBestellungTabelleBElement>
						// $produktBezeichnung
					// </div>
					// <div class=lagerBestellungTabelleBElement>
						// $nettoPreis
					// </div>
					// <div class=lagerBestellungTabelleBElement>
						// <input type="text" id="lagerMenge" size="1" value=""/>
					// </div>
					// <div class=lagerBestellungTabelleBElement>
						// $lieferant
					// </div>
				// </div>
			// ';
		// }
	// }//end if more than 0 results

// }// end if no error
// else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
// }

if ($prodName == "" || $prodName == "Produktnamen eingeben...") {
	$prodName = "einkauf";
}
$nettoPreis = 100;
$lieferant = "Test Lieferant";

$i = 1;
echo'
	<div class=lagerBestellungTabelleZeile>
		<div class=lagerBestellungTabelleBElement>
			'.$prodNummer.'
		</div>
		<div class=lagerBestellungTabelleBElement>
			'.$prodName.'
		</div>
		<div class=lagerBestellungTabelleBElement>
			'.$nettoPreis.'
		</div>
		<div class=lagerBestellungTabelleBElement>
			<input type="text" id="lagerMenge'.$i.'" size="1" value=""/>
		</div>
		<div class=lagerBestellungTabelleBElement>
			'.$lieferant.'
		</div>
		<div class=lagerBestellungTabelleBElement>
			<input type="button" id="einkaufUebernehmen" value="&Uuml;bernehmen" onclick="einkaufUebernehmen('.$prodNummer.', '.$prodNummer.', 5, 5, 5)" />
		</div>
	</div>
';
// <input type="button" id="einkaufUebernehmen" value="&Uuml;bernehmen" onclick="einkaufUebernehmen('.$prodNummer.', '.$prodName.', '.$nettoPreis.', '.$i.', '.$lieferant.')" />

?>