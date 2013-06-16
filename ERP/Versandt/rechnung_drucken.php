<?php

?>

<script language="text/javascript">
    
    function changeDiv() {
        
        $("#rnummer").html("Rechnungsnummer: "+$("#rnr").val());
    }

</script>

<h1>Rechnung drucken</h1>


Rechnungsnummer eingeben:
<br>
<input id ="rnr" type="text" />
<br>
<input type="button" name="sucheID" class="btn" value="Suchen" onclick="changeDiv();" />
<br><br>
<div id="rnummer">Rechnungsnummer:</div>  
<br>
<input type="button" class="btn" value="Rechnung drucken" onclick="javascript:$.growlUI('Rechnung '+ $('#rnr').val() +' wird gedruckt!');" />