<?php

/**
 * Contrôleur frontal : toutes les pages passent par ici.
 * Exemple : index.php?uc=accueil
 */

$uc = $_GET['uc'] ?? 'accueil';

switch ($uc) {
    case 'accueil':
    default:
        include 'controleur/c_accueil.php';
        break;
}

?>
