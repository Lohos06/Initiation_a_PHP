<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $carre = $nombre * $nombre;
    echo "<p>Le carré de $nombre est <strong>$carre</strong>.</p>";
    $triple = $carre * 3;
    echo "<p>Et son triple est <strong>$triple</strong></p>";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculateur de Carré</title>
</head>
<body>
    <h1>Calculer le carré d'un nombre</h1>
    <form method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" name="nombre" id="nombre" required>
        <button type="submit">Calculer</button>
    </form>
</body>
</html>