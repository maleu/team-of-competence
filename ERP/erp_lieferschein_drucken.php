<script language="JavaScript">

function refreshDiv(str) {
    
}

</script>

<?php
$db=include_once('\..\db_connect.php');

echo('

<div id="Auswahlmaske">
Lieferschein auswaehlen
<p>
<form action="erp_datei_auswaehlen.php">
<select name="lieferscheine" size="10">
<option>Test1</option>
<option>Test2</option>
<option>Test3</option>
<option>Test4</option>
<input type="submit" type="submit" value=">>">
</form>
</div>

<div id="lieferschein_content">
Display stuff here...
</div>
        
        

');


?>
