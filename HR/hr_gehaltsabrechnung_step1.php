<html>
    <head></head>
    
    <body>
        <div id="Step1">
            <form action="hr_gehaltsabrechnung_step2.php">
            Bitte wählen Sie den Abrechnungsmonat aus
            <br>
            <select name="Monat">
                <option value="01" selected>Januar</option>
                <option value="02">Februar</option>
                <option value="03">März</option>
                <option value="04">April</option>
                <option value="05">Mai</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Dezember</option>
            </select>
            <br>
            <select multiple name="Mitarbeiter[]">
            </select>
            <input name="submit" type="submit" value="Nächster Schritt">
            </form>
        </div>
    </body>

    
</html>
