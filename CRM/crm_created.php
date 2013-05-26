<div id='crm_wrap'>
	<?php
	echo 'TEST: ' . $id;
	?>
	<div id='crmControls'>
		<button class='crmNav' name="newClient" onclick="crm_createClient()" id="crm_newClient" value="new">
			Neuer Kunde
		</button>
		<button name="findClient" class='crmNav' id='crm_findClient' value="search">
			Suche Kunde
		</button>
		<form>
			<input name="crm_clientID" type="text" class='crmNav' id="crm_input_clientID" onkeydown="if (event.keyCode == 13) document.getElementById('crm_openByIDButton').click()" maxlength="5" />
			<button type="button" id='crm_openByIDButton' onclick="crm_openClientbyID()" class='crmNav'>
				Aufrufen
			</button>
		</form>
		<div id='clearfloat'></div>
	</div>

	<?php
if (isset( $_POST['nachname'] ))
{
    if (get_magic_quotes_gpc()) { $_POST = array_map( 'stripslashes', $_POST ); }
    $vorname    = $_POST['vorname'];
    $nachname = $_POST['nachname'];
 
	include_once 'db_connect.php';
    if (mysqli_connect_errno() == 0)
    {
        $sql = 'INSERT INTO `Kunden` (`vorname`, `nachname`, `firma`) VALUES (?, ?, ?)';
        $insert = $db->prepare( $sql );
        $insert->bind_param( 'sss', $vorname, $nachname, $firma );
        $insert->execute();

        if ($eintrag->affected_rows == 1)
        {
            echo('Neukunde '.$vorname.' '.$nachname.' wurde erfolgreich erstellt :)');
        }
        else
        {
            echo 'Der Kunde konnte nicht erstellt werden...';
        }
    }
    else
    {
        echo("<div id='dbcon'>No DB COnnection possible at all, error is ".mysqli_connect_errno()." : ".mysqli_connect_error()."</div><!--end dbcon -->"); }
	//$db->close();
    }
 
?>
</div>
