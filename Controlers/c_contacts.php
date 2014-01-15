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
            $nom = filter_input($POST, 'nom_contact');
            $prenom = filter_input($POST, 'prenom_contact');
            $societe = filter_input($POST, 'societe_contact');
            $mail = filter_input($POST, 'mail_contact');
            $telephone = filter_input($POST, 'telephone_contact');
            pdoContacts::ajout_contact($nom, $prenom, $societe, $mail, $telephone);          
            break;
    }
}
