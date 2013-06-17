<?php
include_once '../db_connect.php';

if (mysqli_connect_errno() == 0) {
    
    $data = $_POST['sqldata'];
    
    
    //echo("Daten aus hidden field: ".$data);
    
    //Befehl zerlegen
    $d = explode(",",$data);
    
    /*
    for($i=0; $i < 14; $i++) {
        echo($d[$i].'<br>');
    }*/
    
    //Ist der Mitarbeiter schon vorhanden?!
    $sql0 = 'SELECT * FROM `mitarbeiter` WHERE Vorname=? AND Nachname=? AND Benutzername=?';
    $select = $db->prepare($sql0);
    $select->bind_param('sss', $d[3], $d[4], $d[2]);
    $select->execute();
    
    $select->store_result();
    
    if($select->affected_rows <= 0) {

    
  $sql = 'INSERT INTO `mitarbeiter` (`MitarbeiterID`, `Abteilung`, `Benutzername`, `Vorname`, `Nachname`, `Gebdatum`, `Einstelldatum`, `Gehalt_netto`, `Strasse`, `PLZ`, `Ort`, `Passwort`, `Kontonr`, `BLZ`, `Institut`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $insert = $db->prepare( $sql );
        $insert->bind_param('sssssssssssssss', $d[0], $d[1], $d[2], $d[3], $d[4], $d[5], $d[6], $d[7], $d[8], $d[9], $d[10], $d[11], $d[12], $d[13], $d[14]);
        $insert->execute(); 
        
        
        if ($insert->affected_rows == 1)
        {
            echo('Mitarbeiter '.$d[3].' '.$d[4].' ('.$d[2].') wurde erfolgreich angelegt!');
        }
        else
        {
            echo '<br>Der Mitarbeiter konnte nicht angelegt werden...';
        }
        
    }
    
    //Mitarbeiter schon vorhanden..
    else {
        
        echo('Der Mitarbeiter "'.$d[3].' '.$d[4].'" mit dem Benutzernamen "'.$d[2].'" ist bereits vorhanden!');        
    }
        
   
}

else {
    echo("<div id='dbcon'>No DB Connection possible at all, error is " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "</div>");
}



?>
