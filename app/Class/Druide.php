<?php

class Druide extends Perso
{
        use Phrase_Trait;
    public function Phrase_atk() {
        echo 'surchargé';
    }
     public static array $DRUIDE_SPELL_NAME = Array (
        'Givre' =>[
                0 => ['nom' => 'Lancer des arcanes', 'atk' => 5],
                1 => ['nom' => 'Vents givrants', 'atk' => 7],
                3 => ['nom' => 'Javelot de glace', 'atk' => 15]
                ],
        'Feu' => [
                0 => ['nom' => 'Boule de feu', 'atk' => 10],
                1 => ['nom' => 'Trait de feu', 'atk' => 8],
            ],
    );


    /**
     * @param $Choosen_SPELL
     * @param $cible
     * @return void
     */
    public static function SPELL($Choosen_SPELL, $cible){

        foreach (Druide::$DRUIDE_SPELL_NAME as $value){
             if(Druide::$DRUIDE_SPELL_NAME['Givre']){
                 if ($Choosen_SPELL === Druide::$DRUIDE_SPELL_NAME['Givre'][0]){
                     self::Phrase_atk($Choosen_SPELL, $cible);
                     break;
                 }
                 else if($Choosen_SPELL === Druide::$DRUIDE_SPELL_NAME['Givre'][1]){
                     echo 'Tu attaque ' . $cible->getNom() . ' avec '. Druide::$DRUIDE_SPELL_NAME['Givre'][1]['nom'];
                     break;
                 }
             }
            if (Druide::$DRUIDE_SPELL_NAME['Feu']){
                if ($Choosen_SPELL === Druide::$DRUIDE_SPELL_NAME['Feu'][0]){
                    echo 'Tu attaque ' . $cible->getNom() . ' avec '. Druide::$DRUIDE_SPELL_NAME['Feu'][0]['nom'];
                    break;
                }
            }
        };
    }
}
