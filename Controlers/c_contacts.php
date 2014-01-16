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
            require_once '../Passerelles/pdoContacts.php';
            $nom = $_POST['nom_contact'];
            $prenom = $_POST['prenom_contact'];
            $societe = $_POST['societe_contact'];
            $mail = $_POST['mail_contact'];
            $telephone = $_POST['telephone_contact'];
            pdoContacts::ajout_contact($nom, $prenom, $societe, $mail, $telephone);
            include '../Vues/v_accueil.php';
            break;
        case 'modifier':
            require '../Vues/v_modifier.php';
            break;
        case 'valid_modifier':
            require_once '../Passerelles/pdoContacts.php';
            pdoContacts::modifContact($_REQUEST['id'], $_POST['nom'], $_POST['prenom'], $_POST['societe'], $_POST['mail'], $_POST['telephone']);
            ?>
            <script type=text/javascript>
                alert('Ce contact à bien été modifié')
            </script>    
            <?php
            include '../Vues/v_modifier.php';
            break;
    }
}
