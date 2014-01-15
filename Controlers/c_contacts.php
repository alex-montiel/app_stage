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
        case 'ajouter':
            include '../Vues/v_ajout_contact.php';
            break;
        case 'valid_ajout':
            $nom = FILTER_INPUT($POST, 'nom_contact');
            $prenom = FILTER_INPUT($POST, 'prenom_contact');
            $societe = FILTER_INPUT($POST, 'societe_contact');
            $mail = FILTER_INPUT($POST, 'mail_contact');
            $telephone = FILTER_INPUT($POST, 'telephone_contact');
            pdoContacts::ajout_contact($nom, $prenom, $societe, $mail, $telephone);          
            break;
    }
}
