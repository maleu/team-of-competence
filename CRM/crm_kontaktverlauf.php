<?php
    $id = $POST_id;
//include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kontaktverlauf'>
	<table id="table_kontaktverlauf">
		<tbody>
			<tr class="toprow">
				<td>id</td>
				<td>Partner</td>
				<td>Datum</td>
				<td>Inhalt</td>
				<td>MA</td>
			</tr>
			<?php /*
$sql = "SELECT * FROM kontaktverlauf WHERE id=".$id;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($id, $partner, $kontakt, $kontaktweg, $schriftverkehr);
while ($result->fetch()){ */
			?>
			<tr>
				<td><?php echo '$id' ?></td>
				<td><?php echo '$partner' ?></td>
				<td><?php echo '$kontaktweg' ?></td>
				<td><?php echo '$schriftverkehr' ?></td>
				<td><?php echo '$kontakt' ?></td>
			</tr>
			<?php // }   end while ?> 
		</tbody>
	</table>
</div>
<?php
	} // end if no error
	else
	{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	//$db->close();
?>