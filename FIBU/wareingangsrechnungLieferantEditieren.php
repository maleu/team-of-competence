<?php

/**
 * Description of wareingangsrechnungLieferantEditieren
 *
 * @author Martin Leuthold
 */
?>
<h1>Wareneingangsrechnung / Lieferant (editieren)</h1>
<p>Bitte geben Sie die Lieferanten ID und die Rechnungsnummer ein.</p>

<table>
    <tr>
        <td>Rechnungsnummer:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>Lieferanten ID:</td>
        <td><input type="text"/></td>
    </tr>
</table>

<table>
    <tr>
        <td>Lieferant:<br>[Name des Lieferanten]</td>
        <td>Bankverbindung:</td>
    </tr>
    <tr>
        <td><textarea style="width:100%;"></textarea></td>
        <td><textarea style="width:100%;"></textarea></td>
    </tr>
</table>

<table>
    <tr>
        <td>Betrag:</td>
        <td><input type="text"/>€</td>
    </tr>
</table>

<p><a class="btn" href="javascript:$.growlUI('Meldung wurde erfolgreich versandt!');">Überweisen</a></p>
<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>