<?php
require '../Classes/Contact.class.php';
include 'pdoConnexion.php';

class pdoContacts{
    public static function  load_all_contacts(){
        $objPdo = pdoConnexion::getPdoConnexion();
        $req = 'SELECT * FROM contacts';
        $reponse = $objPdo->query($req);
        $tab_reponse = $reponse->fetchAll();

        foreach($tab_reponse as $ligne){
            $intId = $ligne['id_contact'];
            $strNom = $ligne['nom_contact'];
            $strPrenom = $ligne['prenom_contact'];
            $strSociete = $ligne['societe_contact'];
            $strMail = $ligne['mail_contact'];
            $strTel = $ligne['telephone_contact'];
            $objContact = new Contact($intId, $strNom, $strPrenom, $strSociete, $strMail, $strTel);
            $tabContact[] = $objContact;
        }   
        return $tabContact;
    }
    
    public static function ajout_contact($nom, $prenom, $societe, $mail, $telephone){
        $objPdo = pdoConnexion::getPdoConnexion();
        $id = pdoContacts::getNewId();
        $req = $objPdo->prepare("INSERT INTO clients VALUES (?,?,?,?,?,?);");
        $req->execute(array($id, $nom, $prenom, $societe, $mail, $telephone))or die(print_r($objPdo->errorInfo()));
    }   
        
    
    public static function getNewId(){
        $idMax = 1;
        $objPdo = PdoConnexion::getPdoConnexion();
        $req = "SELECT * FROM contacts";
        $reponse = $objPdo->query($req);
        $donnees = $reponse->fetchAll();
        foreach($donnees as $ligne){
            $idMax = $idMax + 1;
        }
        return $idMax;
    }

}
