<?php
/*
 * Si le corps vous en dit - tous droits réservés
 * Ne pas copier ce fichier et tous dossiers de ce serveur sous peine de poursuite
 * Brieg Luz - Sophie Deprez
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../inc/dependances.php';

use \lib\Routeur\Routeur;

$routeur = new Routeur($_SERVER['REQUEST_URI']);

echo 'bonjour';