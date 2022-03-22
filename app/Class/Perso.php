<?php

abstract class Perso
{
    const DEFAULT_ATK_VALUE = 10;

    private string $nom;
    private int $pv;

    public function __construct(string $nom, int $pv)
    {
        $this->setNom($nom);
        $this->setPv($pv);
    }

    public function getPv(): int
    {
        return $this->pv;
    }
    public function setPv(int $pv): void
    {
        $this->pv = abs($pv);
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void
    {
        $this->nom = ucfirst(strtolower($nom));
    }
}