<?php
if($id){
include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kaufhistorie'>
	<table class="tablesorter" id="table_kaufhistorie" border="1" cellspacing="2" cellpadding="2">
		<tbody>
			<tr class="toprow">
				<td>Name</td>
				<td>Preis</td>
				<td>Verkaufsdatum</td>
                <td>Kanal</td>
			</tr>
	<?php 
$sql = "SELECT KundenID, MitarbeiterID, Verkaufsdatum, Kanal, Name, Verkaufspreis FROM Verkaufsliste AS Verkauf JOIN Artikel AS Artikel ON Verkauf.ArtikelID = Artikel.ArtikelID WHERE Verkauf.KundenID=".$id;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($kundenID, $mitarbeiterID, $verkaufsdatum, $kanal, $name, $preis);
while ($result->fetch()){
			?>
			<tr>
				<td><?php echo $name ?></td>
				<td><?php echo $preis ?></td>
				<td><?php echo $verkaufsdatum ?></td>
                <td><?php echo $kanal ?></td>
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