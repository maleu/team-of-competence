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
        <td>LieferantenID</td>
        <td><input type="text" /></td>
    </tr>
    <tr>
        <td>Betrag</td>
        <td><input type="text" > </td>
    </tr>
</table>

<a class="btn" href="javascript:$.growlUI('Growl Notification', 'Have a nice day!');">Überweisen</a>

<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>