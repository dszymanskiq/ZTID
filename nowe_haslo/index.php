<?php

function generujBezpieczneHaslo() {
    $maleLitery = 'abcdefghijklmnopqrstuvwxyz';
    $duzeLitery = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $cyfry = '0123456789';
    $znakiSpecjalne = '!@#$%^&*()_-+=<>?';

    $haslo = $maleLitery[rand(0, 25)]
        . $duzeLitery[rand(0, 25)]
        . $cyfry[rand(0, 9)]
        . $znakiSpecjalne[rand(0, strlen($znakiSpecjalne) - 1)];

    $wszystkieZnaki = $maleLitery . $duzeLitery . $cyfry . $znakiSpecjalne;

    for ($i = strlen($haslo); $i < 8; $i++) {
        $haslo .= $wszystkieZnaki[rand(0, strlen($wszystkieZnaki) - 1)];
    }

    $haslo = str_shuffle($haslo);

    return $haslo;
}