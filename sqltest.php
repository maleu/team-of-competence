<?php
include_once ('db_connect.php');
if (mysqli_connect_errno() == 0) {
	$sql = "SELECT * FROM XXXXX WHERE XXXXX;";
	// select beispiel
	$result = $db -> prepare($sql);
	$result -> execute();
	$result -> store_result();
	$num_rows = $result -> num_rows();
	if ($num_rows !== 0) {
		$result -> bind_result($id, $XXX, $XXXX, $etc);
		while ($result -> fetch()) {
			echo $id;
		}
	}//end if more than 0 results

	//insert Beispiel
	$sql = 'INSERT INTO XXXX (XXX, XXX, XXX) VALUES (?, ?, ?)';
	$insert = $db -> prepare($sql);
	$insert -> bind_param('sss', $XXXX, $XXXX, $XXXX);
	$insert -> execute();

	if ($insert -> affected_rows == 1) {
		echo($XXXX . ' wurde erfolgreich erstellt :)');
	} else {
		echo $XXXX . ' konnte nicht erstellt werden...';
	}

}// end if no error
else {echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div><!--end dbcon -->");
}
?>