<?php
include_once ('db_connect.php');

$prodNummer = $_POST['prodNummer'];
$prodName = $_POST['prodName'];
$i = 1;
if (mysqli_connect_errno() == 0) {
	if ($prodName != "Produktnamen eingeben..."){
		$sql = "SELECT ArtikelID, Name, Einkaufspreis, Lieferant, Bestand FROM Artikel WHERE Name LIKE '%$prodName%'";
	}elseif ($prodNummer != "Produktnummer eingeben..."){	
		$sql = "SELECT ArtikelID, Name, Einkaufspreis, Lieferant, Bestand FROM Artikel WHERE ArtikelID = $prodNummer";
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
					<div class=lagerBestellungTabelleBElement id="produktNummer'.$i.'" data="'.$produktNummer.'">
						'.$produktNummer.'
					</div>
					<div class=lagerBestellungTabelleBElement id="produktBezeichnung'.$i.'" data="'.$produktBezeichnung.'">
						'.$produktBezeichnung.'
					</div>
					<div class=lagerBestellungTabelleBElement id="nettoPreis'.$i.'" data="'.$nettoPreis.'">
						'.$nettoPreis.'
					</div>
					<div class=lagerBestellungTabelleBElement id="bestand'.$i.'" data="'.$bestand.'">
						'.$bestand.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						<input style="width:100px;" type="text" id="lagerMenge'.$i.'" value=""/>
					</div>
					<div class=lagerBestellungTabelleBElement id="lieferant'.$i.'" data="'.$lieferant.'">
						'.$lieferant.'
					</div>
					<div class=lagerBestellungTabelleBElement>
						<input type="button" id="einkaufUebernehmen'.$i.'" value="Bestellen" onclick="einkaufUebernehmen('.$i.')" />
					</div>
				</div>
			';
			$i++;
		}
	}//end if more than 0 results

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}


?>