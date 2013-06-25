<?php
include_once ('db_connect.php');
$pro = $_POST['pro'];
$value = $_POST['value'];
$art = $_POST['art'];
$spalte = "";

if ($art == 1) $spalte = "Name";
if ($art == 2) $spalte = "Einkaufspreis";
if ($art == 3) $spalte = "Bestand";
if ($art == 4) $spalte = "Verkaufspreis";
if ($art == 5) $spalte = "Lieferant";

if (mysqli_connect_errno() == 0) {
	$sql = 'UPDATE Artikel SET '.$spalte.'='.$value.' WHERE ArtikelID='.$pro;
	echo $sql;
	$update = $db -> prepare($sql);
	$update -> execute();

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}


?>