<html>
    <head></head>
    
    <body>
        <form action="hr_MA_check.php" method="POST">
            <input name="Vorname" type="text">    Vorname</input><br><br>
            <input name="Nachname" type="text">    Nachname</input><br><br>
            <input name="Geburtsdatum" type="datetime-local">    Geburtsdatum (YYYY-MM-DD Bsp: 1987-05-10)</input><br><br>
            <input name="Strasse" type="text">    Strasse</input><br><br>
            <input name="PLZ" type="number">    PLZ</input><br><br>
            <input name="Ort" type="text">    Ort</input><br><br>
            <input name="Benutzername">    Benutzername</input><br><br>
            <input name="Passwort">    Temporaeres Passwort</input><br><br>
            
            <input name="Kontonr" type="number">Kontonr</input><br><br>
            <input name="BLZ" type="number">Bankleitzahl</input><br><br>
            <input name="Institut" type="text">Kreditinstitut</input><br><br>
            
            <select name="Abteilung" size="1">
                <option value="HR">HR</option>
                <option value="Einkauf">Einkauf</option>
                <option value="Lager">Lager</option>
                <option value="GF">Geschäftsfuehrung</option>
                <option value="FiBu">Finanzbuchhaltung</option>                
            </select>
            <p>
            <input name="submit" type="submit" value="Benutzer anlegen">
            <input name="reset" type="reset" value="Felder zurücksetzen">
            
        </form>
        
        
    </body>
    
</html>
