<?php
/**
 * Description of lohnGehaltsAendern
 *
 * @author Martin Leuthold
 */
?>
<h1>Lohn- bzw. Gehaltsänderung durchführen</h1>
<p>Bitte geben Sie die Mitarbeiter ID oder den Namen des Mitarbeiter ein.</p>

<table>
    <tr>
        <td>Mitarbeiter ID: <input type="text"/></td>
        <td>Nachname: <input type="text"/></td>
    </tr>
    <tr>
        <td></td>
        <td>Vorname: <input type="text"/></td>
    </tr>
</table>



<p>Bitte geben Sie den Betrag der Lohn-/ Gehaltsänderung ein!</p>
<table>
	<tr>
    	<td>Betrag: <input type="number"/>€</td>
        </tr>
        </table>

<button onclick="$.growlUI('Growl Notification', 'Have a nice day!');">Abrechnen</button>