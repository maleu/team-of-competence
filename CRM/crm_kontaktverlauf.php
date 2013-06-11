<?php
if($id){
include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kontaktverlauf'>
	<table id="table_kontaktverlauf"  border="1" cellspacing="2" cellpadding="2">
		<tbody>
			<tr class="toprow">
				<td>Kontakt #</td>
				<td>Art</td>
				<td>Mitarbeiter</td>
				<td>Datum</td>
				<td>Inhalt</td>
			</tr>
			<?php 
$sql = "SELECT `Datum` , `Kontaktart` , `Inhalt` , `Vorname` , `Nachname` , `KontaktID`
FROM kontaktverlauf AS kontakt
JOIN Mitarbeiter AS mitarbeiter ON kontakt.MitarbeiterID = mitarbeiter.MitarbeiterID
WHERE KundenID =".$id;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($datum, $kontaktart, $inhalt, $vorname, $nachname, $kontaktID);
echo mysqli_error($db);
while ($result->fetch()){ 
			?>
			<tr>
				<td><?php echo $kontaktID ?></td>
				<td><?php echo $kontaktart ?></td>
				<td><?php echo($vorname." ".$nachname) ?></td>
				<td><?php echo $datum ?></td>
				<td><?php echo $inhalt ?></td>
			</tr>
			<?php }    //end while ?> 
		</tbody>
	</table>
		<button class='crmNav' name="newContact" onclick="crm_createContact()" id="crm_newContact" value="new">
			Kontakt eintragen
		</button>
</div>
<?php
	} // end if no error
	else
	{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	//$db->close();
	} // end if id set
?>