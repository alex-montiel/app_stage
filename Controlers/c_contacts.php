<?php
if (!isset($_GET['action'])){
    include 'Vues/v_accueil.php';
    include 'src/header.php';
}
else
{
    switch ($_GET['action']){
        case 'accueil':
            include '../Vues/v_accueil.php';
            break;
        case 'afficher':
            include '../Vues/v_liste_contact.php';
            break;
        case 'ajout':
            include '../Vues/v_ajout_contact.php';
            break;
        case 'valid_ajout':
            
            break;
    }
}
