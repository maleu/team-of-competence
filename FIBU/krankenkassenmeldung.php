<?php
/**
 * Description of krankenkassenmeldung
 *
 * @author Martin Koltermann
 */
?>
<h1>Krankenkassenmeldung erstellen</h1>
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


<p><a class="btn" href="javascript:$.growlUI('Meldung erfolgreich versandt!');">Abrechnen</a></p>
<p>Hinweis: Hierdurch wird automatisch eine Meldung versandt!</p>