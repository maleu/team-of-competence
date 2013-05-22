<?php 
$id = $POST_id;
include_once '../db_connect.php';
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
		<?php 
		echo("<li>Name: " . $vname . " " . $nname . "</li>");
		echo("<li>Adresse: " . $str . " " . $strnr . "</li>");
		?>
	</ul>
</div>
<?php }//end while
} // end if no error 
else
{echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
$db->close();
?>