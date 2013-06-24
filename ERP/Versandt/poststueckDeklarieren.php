<?php

/**
 * Descriptions of poststueckDeklarieren
 *
 * @author Martin Koltermann
 */
?>
<h1>Poststück deklarieren</h1>


<table>
    <tr>
        <td>Firmenname:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Straße:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>PLZ Ort:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Kundennummer:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Gewicht:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Maße:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Tarif:</td>
        <td><input type="text"/></td>
    </tr>
</table>
<p>
<form action="input_radio.htm">
  <p>Wählen Sie ein Versandart aus:</p>
  <p>
    <input type="radio" name="versandart" value="DHL"> 
    DHddL<br>
    <input type="radio" name="versandart" value="DHL Express"> 
    DHL Express<br>
    <input type="radio" name="versandart" value="UPS"> UPS<br>
    <input type="radio" name="versandart" value="Spedition"> Spedition<br>
    <input type="radio" name="versandart" value="Deutsche Bahn"> Deutsche Bahn<br>
    <input type="radio" name="versandart" value="Selbstabholung"> Selbstabholung
  </p>
</form>


<a class="btn" href="javascript:$.growlUI('Poststück wurde deklariert!');">Bestätigen</a>
