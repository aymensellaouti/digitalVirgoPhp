<?php
/*
 * Si la premiere visite on affiche bienvenu dans notre site
 *
 * Si la néme visite on affiche merci pour votre fidélité c'est votre néme visite
 */

session_start();

// c'est la néme visite
if(isset($_SESSION['nbVisite'])) {
    $nbVisite = $_SESSION['nbVisite'] + 1;
    echo "merci pour votre fidélité c'est votre  $nbVisite éme visites";
    $_SESSION['nbVisite'] = $nbVisite;
} else {
    // Première visite
    echo "bienvenu dans notre site";
    $_SESSION['nbVisite'] = 1;
}