<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculateur de Moyenne</title>
</head>
<body>
    <h1>Calculer la moyenne de 3 note</h1>
    <form method="post">
        <div>
            <label for="name">Votre prénom :</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="note1">Entrez votre premiere note :</label>
            <input type="number" name="note1" id="note1" required>
        </div>
        <div>
            <label for="note2">Entrez votre deuxieme note :</label>
            <input type="number" name="note2" id="note2" required>
        </div>
        <div>
            <label for="note3">Entrez votre troisieme note :</label>
            <input type="number" name="note3" id="note3" required>
        </div>
        <button type="submit">Calculer</button>
    </form>
</body>
</html>

<?php
    function calculerMoyenne($note1, $note2, $note3) {
        $moyenne = ($note1 + $note2 + $note3)/3;
        return $moyenne;
    }

    function afficherResultat($name, $moyenne) {
        if ($moyenne >= 10) {
            echo "bien joué $name, tu as une moyenne suffisante, elle est de $moyenne";
        }   
        else {
            echo "Desolé $name, mais tu vas devoir travailler encore avec une moyenne de $moyenne";
        }
    }
    if (isset($_POST['note1']) && isset($_POST['note2']) && isset($_POST['note3']) && isset($_POST['name']) ) {
        $name = $_POST['name'];
        $note1 = $_POST['note1'];
        $note2 = $_POST['note2'];
        $note3 = $_POST['note3'];
    
        $moyenne = calculerMoyenne($note1, $note2, $note3);
        afficherResultat($name, $moyenne);
    }
?>