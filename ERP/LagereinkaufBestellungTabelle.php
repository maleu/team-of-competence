<?php
include_once ('db_connect.php');

$prodNummer = $_POST['prodNummer'];
$prodName = $_POST['prodName'];
$i = 1;
if (mysqli_connect_errno() == 0) {
	if ($prodName != "" || $prodName != "Produktnamen eingeben..."){
		$sql = "SELECT ArtikelID, Name, Einkaufspreis, Lieferant, Bestand FROM Artikel WHERE Name LIKE '%$prodName%'";
	}elseif ($prodNummer != "" || $prodNummer != "Produktnummer eingeben..."){	
	$sql = "SELECT ArtikelID, Name, Einkaufspreis, Lieferant FROM Artikel WHERE ArtikelID = $prodNummer";
	}else{
	exit;
	}
	$result = $db -> prepare($sql);
	$result -> execute();
	$result -> store_result();
	$num_rows = $result -> num_rows();
	if ($num_rows !== 0) {
		$result -> bind_result($produktNummer, $produktBezeichnung, $nettoPreis, $lieferant, $bestand);
		while ($result -> fetch()) {
			echo'
				<div class=lagerBestellungTabelleZeile>
					<div class=lagerBestellungTabelleBElement>
						'.$produktNummer.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						'.$produktBezeichnung.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						'.$nettoPreis.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						'.$bestand.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						<input size="1" type="text" id="lagerMenge'.$i.'" value=""/>
					</div>
					<div class=lagerBestellungTabelleBElement>
						'.$lieferant.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						<input type="button" id="einkaufUebernehmen" value="Bestellen" onclick="einkaufUebernehmen()" />
					</div>
				</div>
			';
			$i++;
		}
	}//end if more than 0 results

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}

if ($prodName == "" || $prodName == "Produktnamen eingeben...") {
	$prodName = "";
}

?>