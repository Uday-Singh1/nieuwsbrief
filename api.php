<?php

if(empty($_POST['email'])){
    echo "no input given";
    return false;

}   

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isValidPassword($password) {
    // Controleer of het wachtwoord minimaal 4 tekens lang is en ten minste 1 hoofdletter bevat
    return (strlen($password) >= 4) && (preg_match('/[A-Z]/', $password) > 0);
}


if (empty($_POST['email']) || empty($_POST['password'])) {
    echo "Niet alle vereiste velden zijn ingevuld";
} else {
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST['password'];
    
    if (isValidEmail($inputEmail) && isValidPassword($inputPassword)) {
        // Voer hier de verdere verwerking uit, bijv. opslaan in de database (met prepared statements en hashing)
        echo "Inloggen geslaagd.";
        // Hier zou je de gebruiker doorverwijzen naar de gewenste pagina na succesvol inloggen.
    } else {
        echo "Inloggen mislukt. Controleer de ingevoerde gegevens.";
    }
}