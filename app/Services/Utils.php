<?php

namespace App\Services;

class Utils
{
    public static function direBonjour()
    {
        return "Bonjour, Monde !";
    }

    public static function addition($a, $b)
    {
        return $a + $b;
    }

    public static function trouverMax($a, $b)
    {
        return $a > $b ? $a : $b;
    }

    public static function compterCaracteres($str)
    {
        return strlen($str);
    }

    public static function estPair($nombre)
    {
        return $nombre % 2 === 0;
    }

    public static function saluer($nom)
    {
        return empty($nom) ? "Bonjour, Inconnu !" : "Bonjour, $nom !";
    }

    public static function calculerAire($largeur, $hauteur)
    {
        if ($largeur <= 0 || $hauteur <= 0) {
            return 0;
        }
        return $largeur * $hauteur;
    }

    public static function convertirEnMajuscules($str)
    {
        return strtoupper($str);
    }

    public static function sommeTableau($nombres)
    {
        return array_sum($nombres);
    }

    public static function existeDansTableau($nombre, $tableau)
    {
        return in_array($nombre, $tableau);
    }
}
