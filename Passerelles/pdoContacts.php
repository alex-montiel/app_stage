<?php
require '../Classes/Contact.php';
require 'pdoConnexion.php';

class pdoContacts{
    public static function  load_all_contacts(){
        $objPdo = pdoConnexion::connect_pdo();
        $req = 'SELECT * FROM clients';
        $reponse = $objPdo->query($req);
        $tab_reponse = $reponse->fetchAll();

        foreach($tab_reponse as $ligne){
            $intId = $ligne['id_contact'];
            $strNom = $ligne['nom_contact'];
            $strPrenom = $ligne['prenom_contact'];
            $strSociete = $ligne['societe_contact'];
            $strMail = $ligne['email_contact'];
            $strTel = $ligne['telephone_contact'];
            $objContact = new Contact($intId, $strNom, $strPrenom, $strSociete, $strMail, $strTel);
            $tabContact[] = $objContact;
        }   
        return $tabContact;
    }
    
    public static function ajout_contact(){
        $objPdo = pdoConnexion::connect_pdo();
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $societe = $GET['societe'];
        $mail = $_GET['mail'];
        $telephone = $_GET['telephone'];
        $req = "INSERT INTO clients VALUES ("."'".$nom."'"."'".$prenom."'"."'".$societe."'"."'".$mail."'"."'".$telephone."');";
        
    }

}
