
<?php

/**
 * Description of lohsteuerUeberweisung
 *
 * @author Martin Koltermann
 */
?>
<h1>Lohnsteuerüberweisung durchführen</h1>
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

<table>
    <tr>
        <td>FinanzamtID:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Finanzamt Anschrift:</td>
        <td><input type="text" style="width: 300px; height: 100px" /></td>
    </tr>
    <tr>
        <td>Betrag:</td>
        <td><input type="text">€ </td>
    </tr>
</table>



<p><a class="btn" href="javascript:$.growlUI('Betrag wurde angewiesen!');">Überweisen</a></p>
<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>