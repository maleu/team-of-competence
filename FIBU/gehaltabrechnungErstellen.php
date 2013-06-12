<?php
/**
 * Description of gehaltabrechnungErstellen
 *
 * @author Martin Leuthold
 */
?>
<h1>Gehaltsabrechnung erstellen</h1>
<p>Bitte geben Sie die Mitarbeiter ID oder den Namen des Mitarbeiter ein.</p>

<table>
    <tr>
        <td>Mitarbeiter ID:</td><td><input type="text"/></td>
        <td>Nachname:</td><td><input type="text"/></td>
    </tr>
    <tr>
        <td></td><td></td>
        <td>Vorname:</td><td><input type="text"/></td>
    </tr>
</table>

<p>Bitte geben Sie den Betrag des Lohns/Gehalts ein.</p>

<table>
    <tr>
        <td>Betrag:</td><td><input type="text"/>€</td>
        <td></td><td></td>
    </tr>
    <tr>
        <td>Bonus:</td><td><input type="text"/>€</td>
        <td>Vermerk:</td><td><input type="text"/></td>
    </tr>
</table>

<p><a class="btn" href="javascript:$.growlUI('Gehaltsabrechnung wurde erstellt!');">Abrechnen</a></p>
<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>