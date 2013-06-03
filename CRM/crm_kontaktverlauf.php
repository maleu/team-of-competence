<?php
    $id = $POST_id;
//include_once '../db_connect.php';
if (mysqli_connect_errno() ==0 )
{ ?>
<div id='kontaktverlauf'>
	<table id="table_kontaktverlauf">
		<tbody>
			<tr class="toprow">
				<td>KundenID</td>
				<td>MitarbeiterID</td>
				<td>Seit</td>
			</tr>
			<?php /*
$sql = "SELECT * FROM kontaktverlauf WHERE id=".$KundenID;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($KundenID, $MitarbeiterID, $Seit);
while ($result->fetch()){ */
			?>
			<tr>
				<td><?php echo '$KundenID' ?></td>
				<td><?php echo '$MitarbeiterID' ?></td>
				<td><?php echo '$Seit' ?></td>

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