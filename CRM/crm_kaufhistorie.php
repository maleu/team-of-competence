<?php

include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kaufhistorie'>
	<table id="table_kaufhistorie">
		<tbody>
			<tr class="toprow">
				<td>KundenID</td>
				<td>MitarbeiterID</td>
				<td>ArtikelID</td>
				<td>Verkaufsdatum</td>
                                <td>Kanal</td>
			</tr>
	<?php /* Ich habe soweit wie möglich den Statement ergänzt!!!
$sql = "SELECT * FROM Verkaufsliste WHERE id=".$ArtikelID;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($KundenID, $MitarbeiterID, $ArtikelID, $Verkaufsdatum, $Kanal);
while ($result->fetch()){ */
			?>
			<tr>
				<td><?php echo '$KundenID' ?></td>
				<td><?php echo '$MitarbeiterID' ?></td>
				<td><?php echo '$ArtikelID' ?></td>
				<td><?php echo '$Verkaufsdatum' ?></td>
                                <td><?php echo '$Kanal' ?></td>
			</tr>
			<?php //} end while ?>
		</tbody>
	</table>
</div>
<?php
	} // end if no error
	else
	{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	//$db->close();
?>