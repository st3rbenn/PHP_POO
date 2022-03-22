<?php

spl_autoload_register(function ($className){
    if (strpos($className, 'Interface')) {
        require 'Interface/' . $className . '.php';
    }else if (strpos($className, 'Trait')) {
        require 'Trait/' . $className . '.php';
    }else if (strpos($className, 'Repository')){
        require 'Repository' . $className . '.php';
    }
    else {
        require 'Class/' . $className . '.php';
    }
});

$dbConnect = DbConnect::getConnection();



$sterben = new Guerrier('sterben', 60);
var_dump($sterben);

$NikTam = new Druide('Niktam', '100');
var_dump($NikTam);

$NikTam::SPELL(Druide::$DRUIDE_SPELL_NAME['Givre'][1], $sterben);

