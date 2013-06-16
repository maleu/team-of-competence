<?php

?>

<script language="text/javascript">
    
    function changeDiv() {
        
        $("#pnummer").html("Paketnummer: "+$("#pnr").val());
    }

</script>

<h1>Paketschein drucken</h1>


Paketnummer eingeben:
<br>
<input id ="pnr" type="text" />
<br>
<input type="button" name="sucheID" class="btn" value="Suchen" onclick="changeDiv();" />
<br><br>
<div id="pnummer">Paketnummer:</div>  
<br>
<input type="button" class="btn" value="Paketschein drucken" onclick="javascript:$.growlUI('Paketschein '+ $('#pnr').val() +' wird gedruckt!');" />