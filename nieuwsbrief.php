<?php
// Verbinding maken met de database
$mysqli = new mysqli("localhost", "exampleuser", "examplepass", "exampledb");

if ($mysqli->connect_error) {
    die("Databaseverbinding mislukt: " . $mysqli->connect_error);
}

// Stel het onderwerp en bericht van de nieuwsbrief in
$onderwerp = "Onderwerp van de nieuwsbrief";
$bericht = "Dit is de inhoud van de nieuwsbrief.";

// Selecteer gebruikers die de nieuwsbrief willen ontvangen
$sql = "SELECT email FROM users WHERE wil_nieuwsbrief_ontvangen = 1";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ontvanger_email = $row['email'];

        // E-mail verzenden
        if (mail($ontvanger_email, $onderwerp, $bericht)) {
            echo "E-mail verzonden naar: " . $ontvanger_email . "<br>";
        } else {
            echo "E-mail kon niet worden verzonden naar: " . $ontvanger_email . "<br>";
        }

        // Voeg de e-mailgegevens toe aan de user_newsletter-tabel
        $verzendtijd = date("Y-m-d H:i:s");
        $sql = "INSERT INTO user_newsletter (email, verzendtijd) VALUES ('$ontvanger_email', '$verzendtijd')";
        $mysqli->query($sql);
    }
} else {
    echo "Geen gebruikers gevonden om de nieuwsbrief naar te verzenden.";
}

// Sluit de databaseverbinding
$mysqli->close();
?>
