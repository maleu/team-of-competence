<html>
    <head></head>
    
    <body>
        <form method="POST" action="hr_MA_hinzufuegen.php" >
            <input name="Vorname" type="text">    Vorname</input><br><br>
            <input name="Nachname" type="text">    Nachname</input><br><br>
            <input name="Geburtsdatum" type="text">    Geburtsdatum</input><br><br>
            <input name="Strasse" type="text">    Strasse</input><br><br>
            <input name="PLZ" type="text">    PLZ</input><br><br>
            <input name="Ort" type="text">    Geburtsdatum (DD-MM-YYYY Bsp: 25-04-1991)</input><br><br>
            <input name="Benutzername">    Benutzername</input><br><br>
            <input name="Passwort">    Temporaeres Passwort</input><br><br>
            
            <select name="Abteilung" size="1">
                <option value="1">HR</option>
                <option value="2">Einkauf</option>
                <option value="3">Lager</option>
                <option value="4">Geschäftsfuehrung</option>
                <option value="5">Finanzbuchhaltung</option>                
            </select>
           
            <input name="submit" type="submit" value="Benutzer anlegen">
            
        </form>
        
        
    </body>
    
</html>
