<?php
// Vervang 'YOUR_API_KEY' door jouw MailerSend API-sleutel
$apiKey = 'mlsn.8778af7fde3652c2e348b7db2be651c298206f7b9c89098dff4671bb8b8f568b';

// Stel de e-mailinformatie in
// Stel de e-mailinformatie in
$emailData = [
    'from' => [
        'email' => 'udaysngjobs@gmail.com',
        'name' => 'Uday'
    ],
    'to' => [
        [
            'email' => $_POST['email'], // Gebruik de e-mail die is ingevoerd in de form
            'name' => $_POST['name'],   // Gebruik de naam die is ingevoerd in de form
        ]
    ],
    'subject' => 'Bedankt voor het abonneren',
    'text' => 'Dit is de tekstinhoud van de e-mail.',
    'html' => '<p>Dit is de HTML-inhoud van de e-mail.</p>'
];


// Stel de headers in
$headers = [
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json',
];

// Converteer de e-mailinformatie naar JSON
$emailDataJson = json_encode($emailData);

// Maak een cURL-verzoek om de e-mail te versturen
$ch = curl_init('https://api.mailersend.com/v1/email');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $emailDataJson);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Voer het cURL-verzoek uit
$response = curl_exec($ch);

// Controleer of het verzenden is gelukt
if ($response === false) {
    echo 'Fout bij het verzenden van de e-mail: ' . curl_error($ch);
} else {
    echo 'E-mail is succesvol verzonden.';
}

// Sluit de cURL-verbinding
curl_close($ch);


?>
