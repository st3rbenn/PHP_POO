<?php


class Guerrier extends Perso
{
    private int $attaqueDeBase = 10;

    public function attaqueCible($cible)
    {
        $cible->setPv($cible->getPv() - $this->attaqueDeBase);
    }
}