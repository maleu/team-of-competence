<?php
$prodNummer = $_POST['prodNummer'];
$prodName = $_POST['prodName'];
$nettoPreis = $_POST['nettoPreis'];
$menge = $_POST['menge'];
$lieferant = $_POST['lieferant'];

echo '
<div class=lagerBestellungTabelleZeile>
	<div class=lagerBestellungTabelleElement>
		'.$prodNummer.'
	</div>
	<div class=lagerBestellungTabelleElement>
		'.$prodName.'
	</div>
	<div class=lagerBestellungTabelleElement>
		'.$nettoPreis.'
	</div>
	<div class=lagerBestellungTabelleElement>
		'.$menge.'
	</div>
	<div class=lagerBestellungTabelleElement>
		'.$lieferant.'
	</div>
	<div class=lagerBestellungTabelleElement>
		'.$prodNummer.'
	</div>
</div>
';
?>