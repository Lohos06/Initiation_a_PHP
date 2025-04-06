<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;
$client = new Client();

$response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
    'query' => [
        'q' => 'Nanterre',
        'appid' => '434a387585a595edd84e5e9208de3522',
        'units' => 'metric',
        'lang' => 'fr'
    ],
    'verify' => false // Désactiver la vérification du certificat SSL
]);

$data = json_decode($response->getBody(), true);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Météo à Nanterre</h1>

    <div class="weather-info">
        <p><strong>Conditions météorologiques :</strong> <?= ucfirst($data['weather'][0]['description']) ?></p>
        <p><strong>Température actuelle :</strong> <span class="temperature"><?= $data['main']['temp'] ?>°C</span></p>
        <p><strong>Température ressentie :</strong> <?= $data['main']['feels_like'] ?>°C</p>
        <p><strong>Pression :</strong> <?= $data['main']['pressure'] ?> hPa</p>
        <p><strong>Humidité :</strong> <?= $data['main']['humidity'] ?>%</p>
        <p><strong>Vent :</strong> <?= $data['wind']['speed'] ?> m/s</p>
    </div>
</div>

</body>
</html>
