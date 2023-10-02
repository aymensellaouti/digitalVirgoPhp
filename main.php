<?php
//require "personne.php";
//require "voiture.php";
require "autoload.php";
Personne::showNbPersonn();
$personne = new Personne();
$voiture = new Voiture();
Personne::showNbPersonn();
$personne2 = clone $personne;
$personne3 = new Personne();
Personne::showNbPersonn();
$personne->setName('sellaouti');
$personne2->setName('aymen');
echo $personne->getName();
echo $personne2->getName();