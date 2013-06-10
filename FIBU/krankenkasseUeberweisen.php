<?php

/**
 * Description of krankenkasseUeberweisen
 *
 * @author Martin Leuthold
 */
?>
<h1>Gehaltsabrechnung erstellen</h1>
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

<table>
    <tr>
        <td>Krankenkasse ID:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Betrag: </td>
        <td><input type="text"/>€</td>
    </tr>
</table>

<a class="btn" href="javascript:$.growlUI('Growl Notification', 'Have a nice day!');">Überweisen</a>

<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>