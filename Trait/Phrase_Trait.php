<?php

trait Phrase_Trait
{
    public static function Phrase_atk($tab, $perso){
        echo 'Tu attaque ' . $perso->getNom() . ' avec '. $tab['nom'];
    }
}