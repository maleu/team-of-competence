<?php
include_once ('db_connect.php');
$pro = $_POST['pro'];

if (mysqli_connect_errno() == 0) {
	$sql = 'Delete FROM Artikel WHERE ArtikelID='.$pro;
	$delete = $db -> prepare($sql);
	$delete -> execute();

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}


?>