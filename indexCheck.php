<?php
/*
 * Prüft die Eingaben serverintern um Manipulation zu vermeiden.
 */

// Parameter einlesen
$benutzername = $_POST['benutzername'];
$passwort = $_POST['passwort'];

// Zustand der User-Verifizierung initialisieren
$userIsValid = false;

// Benutzer verifizieren
if($benutzername == "user" && $passwort == "test")
    $userIsValid = true;

// Weiterleitung in Abhängigkeit von User-Verifizierung
if($userIsValid)
    header("location:main.php?role=".$_POST['rolle']);
else
    header("location:index.php");
?>