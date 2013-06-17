<script language="text/javascript">            
function uploadData() {

            var str = $("#PassData").serialize();
    var r = $.ajax({
        type: 'POST',
        data: str,
        url: 'HR/hr_MA_add.php',
        async: false
    }).responseText;
    
    $("#uploaded").empty().append(r);

}

</script>
    
    </script>

<?php

echo('<div id="uploaded" />');

$check_empty = true;


    $vorname = $_POST['Vorname'];
    $nachname = $_POST['Nachname'];
    $bday = $_POST['Geburtsdatum'];
    $strasse = $_POST['Strasse'];
    $plz = $_POST['PLZ'];
    $ort = $_POST['Ort'];
    $username = $_POST['Benutzername'];
    $pass = $_POST['Passwort'];
    $kontonr = $_POST['Kontonr'];
    $blz = $_POST['BLZ'];
    $institut = $_POST['Institut'];
    $abteilung = $_POST['Abteilung'];
    

    $eingaben = array($vorname, $nachname, $bday, $strasse, $plz, $ort, $username, $pass, $kontonr, $blz, $institut, $abteilung);

    //Auf Leereingaben prüfen
    for ($i = 0; $i <= 11; $i++) {

        trim($eingaben[$i]);

        if (empty($eingaben[$i]) || $eingaben[$i] == " " || ctype_space($eingaben[$i])) {
            echo('Fehler: Bitte füllen Sie alle Felder aus! <br>');

            $check_empty = true;
            break;
        } else {

            $check_empty = false;
        }
    }



    if (!($check_empty)) {
        
        $check_syntax = false;
        
        //Prüfen, ob Texteingaben dem richtigen Datentyp entsprechen
        if (!(ctype_alpha($vorname))) {

            echo('Der Vorname darf nur Buchstaben enthalten!<br>');
            
        }

        else if (!(ctype_alpha($nachname))) {

            echo('Der Nachname darf nur Buchstaben enthalten!<br>');
            
        }

        else if (!(ctype_alpha($ort))) {

            echo('Der Ort darf nur Buchstaben enthalten!<br>');
            
        }

        else if (!(ctype_alpha($eingaben[11]))) {

            echo('Das Kreditinstitut darf nur Buchstaben enthalten!<br>');
            
        }

        //Prüfen, ob numerische Eingaben dem richtigen Datentyp entsprechen
        else if (!(ctype_digit($kontonr))) {

            echo('Die Kontonummer darf nur aus Zahlen bestehen!<br>');
            
        }

        else if (!(ctype_digit($plz))) {

            echo('Die Postleitzahl darf nur aus Zahlen bestehen!<br>');
            
        }

        else if (!(ctype_digit($blz))) {

            echo('Die Bankleitzahl darf nur aus Zahlen bestehen!<br>');
            
        }
        
        //Datum konvertieren und prüfen
        
        else if ( !($bday == date('Y-m-d',strtotime($bday))) ) {
            echo('Bitte das Datum im Format JJJJ-MM-TT eingeben! (Bsp: 1980-04-10: 10. April 1980)<br>');
            
        }
        
        else { 
            $check_syntax = true; 
            
            };

        
        if ($check_syntax) {
            
            //Datum extrahieren
            $datum = explode("-", $bday);
            $bday = $datum[0].$datum[1].$datum[2];
            
            
            //SQL String erzeugen
            $sql = "'',$abteilung,$username,$vorname,$nachname,$bday,'','',$strasse,$plz,$ort,$pass,$kontonr,$blz,$institut";


            echo('<h3>Ihre Eingaben</h3><p>');
            echo('Vorname: ' . $vorname . '<br>');
            echo('Nachname: ' . $nachname . '<br>');
            echo('Geburtsdatum: ' .$datum[2]. '.'.$datum[1].'.'.$datum[0].'<br>');
            echo('Strasse: ' . $strasse . '<br>');
            echo('PLZ: ' . $plz . '<br>');
            echo('Kontonummer: ' . $kontonr . '<br>');
            echo('BLZ: ' . $blz . '<br>');
            echo('Kreditinstitut: ' . $institut . '<br>');
            echo('Benutzername: ' . $username . '<br>');
            echo('Temporäres Kennwort: ' . $pass . '<br>');
            echo('Abteilung: ' . $abteilung . '<p>');

            echo('Sind diese Eingaben korrekt? Klicken Sie zum Fortfahren auf Weiter.<p>');
            
            
               
            echo('<form id="PassData" action="HR/hr_MA_add.php" method="POST">
                <input type="hidden" id="sqldata" name="sqldata" value="'.$sql.'" />
              
              <input type="button" class="btn" value="Weiter" onclick="javascript:uploadData();" />
              </form>
              ');
        }

        //Fehlerhafte Eingaben
        else {
            echo('Korrigieren Sie bitte die Eingaben.<br>');
            echo('<form>
             
              </form> ');
        }
    } else {
        echo('Vervollständigen Sie bitte die Eingaben.<br>');
        echo('
             
              ');
    }



?>
