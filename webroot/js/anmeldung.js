/*
 * Prüft die Eingaben des Nutzers bereits vor dem Abschicken der 
 * Anmeldeinformationen.
 * @returns {Boolean}
 **/
function checkUser() {
    // User ist valide
    if (
            $('#benutzername').val() === "user" &&
            $('#passwort').val() === "test")
        return true;

    // User ist nicht valide
    /*
     * Nur Benachrichtigung anzeigen, fall überhaupt 
     * Anmeldeinformationen vorhanden sind.
     **/
    if (
            $('#benutzername').val() != "" &&
            $('#passwort').val() != "")
        $.growlUI('', 'Die Anmeldeinformationen sind nicht korrekt.');
    return false;
}