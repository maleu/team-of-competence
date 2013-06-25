<?php
include_once ('db_connect.php');
$einkaufspreis = $_POST['einkaufspreis'];
$bestand = $_POST['bestand'];
$verkaufspreis = $_POST['verkaufspreis'];
$lieferant = $_POST['lieferant'];

if (mysqli_connect_errno() == 0) {
	$sql = 'INSERT INTO Artikel (Einkaufspreis, Bestand, Verkaufspreis, Lieferant) VALUES ('.$einkaufspreis.', '.$bestand.', '.$verkaufspreis.', '.$lieferant.')';
	echo $sql;
	$insert = $db -> prepare($sql);
	//$insert -> bind_param('sss', $XXXX, $XXXX, $XXXX);
	$insert -> execute();

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}


?>