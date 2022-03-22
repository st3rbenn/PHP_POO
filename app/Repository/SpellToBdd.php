<?php
var_dump($_POST);

$spellName = htmlentities(htmlspecialchars($_POST['nom']));
$spellDescription = htmlentities(htmlspecialchars($_POST['description']));
$spellAtk = htmlentities(htmlspecialchars($_POST['nb_atk']));
echo $spellName. ' ' . html_entity_decode($spellDescription), $spellAtk;


$DbConnect = DbConnect::getConnection();



$query = $DbConnect->prepare('INSERT INTO spell (nom, description, nb_atk) VALUES (:spellName, :spellDescription, :spellAtk)');
$query->execute(
    [
        'nom' => $spellName,
        'description' => $spellDescription,
        'nb_atk' => $spellAtk
    ]
);
