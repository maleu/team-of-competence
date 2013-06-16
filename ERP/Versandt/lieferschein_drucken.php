<?php

?>

<script language="text/javascript">
    
    function changeDiv() {
        
        $("#lnummer").html("Lieferscheinnummer: "+$("#lnr").val());
    }

</script>

<h1>Lieferschein drucken</h1>


Lieferscheinnummer eingeben:
<br>
<input id ="lnr" type="text" />
<br>
<input type="button" name="sucheID" class="btn" value="Suchen" onclick="changeDiv();" />
<br><br>
<div id="lnummer">Lieferscheinnummer:</div>  
<br>
<input type="button" class="btn" value="Lieferschein drucken" onclick="javascript:$.growlUI('Lieferschein '+ $('#lnr').val() +' wird gedruckt!');" />
