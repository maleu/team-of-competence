<?php

/**
 * Description of versandtart
 *
 * @author Martin Koltermann
 */
?>
<h1>Versandart</h1>


<form action="input_radio.htm">
  <p>Wählen Sie ein Versandart aus:</p>
  <p>
    <input type="radio" name="versandart" value="DHL"> DHL<br>
    <input type="radio" name="versandart" value="DHL Express"> DLH Express<br>
    <input type="radio" name="versandart" value="Selbstabholung"> Selbstabholung
  </p>
</form>

<a class="btn" href="javascript:$.growlUI('Sie habe DHL Express gewählt');">Bestätigen</a>
