<?php 
$id = $POST_id;
$db = @new mysqli('localhost', 'web27', 'Boss1337', 'usr_web27_XXX'); //DB FEHLT NOCH!!
if (mysqli_connect_errno() ==0 )
{ 
	$sql = "SELECT * FROM clients WHERE id=".$id;
	$result=$db->prepare($sql);
	$result->execute();
	$result->bind_result($id, $nname, $vname, $etc);
	 while ($result->fetch()){

?>
<div id='kundenprofil'>
	<ul id="profile_ul">
		<?php echo("<li>Name: " . $vname . " " . $nname . "</li>");
		echo("<li>Adresse: " . $str . " " . $strnr . "</li>");
		?>
	</ul>
</div> 
<?php } //ENDE Kundenprofil ?>
<div id='kaufhistorie'>

</div>
<div id='kontaktverlauf'>
	<table>
		<tbody>
			<tr class="toprow">
				<td>id</td>
				<td>Partner</td>
				<td>Datum</td>
				<td>Inhalt</td>
				<td>MA</td>
			</tr>
			<?php
$sql = "SELECT * FROM kontaktverlauf WHERE id=".$id;
$result=$db->prepare($sql);
$result->execute();
$result->bind_result($id, $partner, $kontakt, $kontaktweg, $schriftverkehr);
while ($result->fetch()){
			?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $partner ?></td>
				<td><?php echo $Datum ?></td>
				<td><?php echo $Inhalt ?></td>
				<td><?php echo $MA ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php
}
else
{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
$db->close();
?>