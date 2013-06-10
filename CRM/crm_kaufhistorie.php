<?php
if($id){
include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kaufhistorie'>
	<table id="table_kaufhistorie">
		<tbody>
			<tr class="toprow">
				<td>MitarbeiterID</td>
				<td>ArtikelID</td>
				<td>Verkaufsdatum</td>
                <td>Kanal</td>
			</tr>
	<?php 
$sql = "SELECT KundenID, MitarbeiterID, Verkaufsdatum, Kanal, Name, Preis FROM Verkaufsliste AS Verkauf JOIN ArtikelTemp AS Artikel ON Verkauf.ArtikelID = Artikel.ArtikelID WHERE Verkauf.KundenID=".$id;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($kundenID, $mitarbeiterID, $verkaufsdatum, $kanal, $name, $preis);
while ($result->fetch()){
			?>
			<tr>
				<td><?php echo $KundenID ?></td>
				<td><?php echo $MitarbeiterID ?></td>
				<td><?php echo $name ?></td>
				<td><?php echo $preis ?></td>
				<td><?php echo $Verkaufsdatum ?></td>
                <td><?php echo $Kanal ?></td>
			</tr>
			<?php } //end while 
			?>
		</tbody>
	</table>
</div>
<?php
	} // end if no error
	else
	{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	//$db->close();
	} else echo "<br /> Es wurde noch kein Kunde gewählt.";	
?>