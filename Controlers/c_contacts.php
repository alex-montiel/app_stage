<?php

if (!isset($_REQUEST['action'])){
    include './Vues/v_accueil.php';
}
else
{
    switch ($_REQUEST['action']){
        case 'accueil':
            include './Vues/v_accueil.php';
            break;
        case 'afficher':
            include './Vues/v_liste_contact.php';
            break;
        case 'ajout':
            include './Vues/v_ajout_contact.php';
            break;
        case 'valid_ajout':
            
            break;
    }
}
