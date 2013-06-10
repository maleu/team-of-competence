<?php 
include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ 
	$sql = "SELECT * FROM Kunden WHERE KundenID='".$id."';";
	$result=$db->prepare($sql);
	if(!$result) echo $sql;
	$result->execute();
	$result->store_result();
	$num_rows= $result->num_rows();
	if($num_rows!== 0){
	$result->bind_result($kundenID, $mitarbeiterID, $firma, $strasse, $plz, $ort, $vname, $nname, $tel, $mail );
	while ($result->fetch()){
?>
<div id='kundenprofil'>
	<ul id="profile_ul">
		<?php 
		echo("<li>Name: " . $vname . " " . $nname . "</li>");
		echo("<li>Mail: " . $mail . "</li>");
		echo("<li>Firma: " . $firma . "</li>");
		echo("<li>Adresse: " . $strasse . " " . $plz . " ". $ort ."</li>");
		echo("<li>Zust. MA: " . $mitarbeiterID . "</li>");
		?>
	</ul>
</div>
<?php }//end while fetch
	
	}//end if rows>0
	else echo "Diesen Kunden (Nummer: ".$id." ) gibt es nicht.";
	} // end if no error
	else
	{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	//$db->close();
?>