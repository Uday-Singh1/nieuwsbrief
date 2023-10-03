<?php
date_default_timezone_set('Europe/Amsterdam'); // Stel de tijdzone in op de juiste waarde voor jouw locatie

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Controleer of het verzoek een POST-verzoek is

    if (empty($_POST['name']) || empty($_POST['email'])) {
        echo "Niet alle vereiste velden zijn ingevuld";
    } else {
        $inputName = $_POST['name'];
        $inputEmail = $_POST['email'];

        // Maak een databaseverbinding
        $con = new mysqli('db', 'exampleuser', 'examplepass', 'exampledb', 3306);
        if ($con->connect_error) {
            die("Connectie mislukt: " . $con->connect_error);
        }

        // SQL-query om gegevens in te voegen in de 'users'-tabel
        $sql = "INSERT INTO users (name, email, date, active) VALUES (?, ?, NOW(), 1)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $inputName, $inputEmail);

        if ($stmt->execute()) {
            // Gegevens zijn succesvol ingevoegd
            $insertedDate = date("Y-m-d H:i:s"); // Haal de ingevoegde datum op
            echo "Gegevens zijn succesvol opgeslagen in de database. Datum van invoeging: $insertedDate";
        } else {
            // Er is een fout opgetreden bij het invoegen van de gegevens
            echo "Fout bij het invoegen van de gegevens in de database: " . $stmt->error;
        }

        $stmt->close();

        // Sluit de databaseverbinding
        $con->close();
    }
} else {
    echo "Dit script moet worden aangeroepen via een POST-verzoek.";
}
?>
