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
            ?>
            <script type="text/javascript">
                alert('Le contact à bien été ajouté !');
            </script>
            <?php
            break;
    }
}
