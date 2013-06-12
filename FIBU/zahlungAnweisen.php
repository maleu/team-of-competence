<?php

/**
 * Description of zahlungAnweisen
 *
 * @author Martin Koltermann
 */
?>
<h1>Zahlung anweisen</h1>
<p>Bitte geben Sie die Lieferanten ID oder die Rechnungsnummer ein.</p>



<table>
    <tr>
        <td>Rechungsnummer:</td>
        <td><input type="text"/></td>
    </tr>
    <tr>
        <td>LieferantenID:</td>
        <td><input type="text" /></td>
    </tr>
    <tr>
        <td>Betrag:</td>
        <td><input type="text" > </td>
    </tr>
</table>

<p><a class="btn" href="javascript:$.growlUI('Zahlung wurde angewiesen!');">Überweisen</a></p>

<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>