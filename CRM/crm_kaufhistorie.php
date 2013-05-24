<?php

include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kontaktverlauf'>
	<table id="table_kontaktverlauf">
		<tbody>
			<tr class="toprow">
				<td>id</td>
				<td>Datum</td>
				<td>Artikel</td>
				<td>Bezahlt?</td>
			</tr>
			<?php
$sql = "SELECT * FROM kaeufe WHERE id=".$id;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($id, $datum, $artikel, $bezahlt);
while ($result->fetch()){
			?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $datum ?></td>
				<td><?php echo $datum ?></td>
				<td><?php echo $bezahlt ?></td>
			</tr>
			<?php } //end while ?>
		</tbody>
	</table>
</div>
<?php
	} // end if no error
	else
	{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	$db->close();
?>