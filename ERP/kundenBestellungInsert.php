<?php
include_once ('db_connect.php');
$pro = $_POST['pro'];
$bestand = $_POST['bestand'];
$menge = $_POST['menge'];
$bestandNeu = (float) $bestand - (float) $menge;
if (mysqli_connect_errno() == 0) {
	$sql = 'UPDATE Artikel SET Bestand='.$bestandNeu.' WHERE ArtikelID='.$pro;
	$update = $db -> prepare($sql);
	$update -> execute();

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}

?>