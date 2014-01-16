<?php
require '../Classes/Contact.class.php';
include 'pdoConnexion.php';

class pdoContacts{
    public static function  load_all_contacts(){
        $objPdo = pdoConnexion::getPdoConnexion();
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
    
    public static function ajout_contact($nom, $prenom, $societe, $mail, $telephone){
        $objPdo = pdoConnexion::getPdoConnexion();
        $id = pdoContacts::getNewId();
        $req = $objPdo->prepare("INSERT INTO clients VALUES (?,?,?,?,?);");
        $req->execute(array($nom, $prenom, $societe, $mail, $telephone))or die(print_r($objPdo->errorInfo()));
        ?>
            <script type="text/javascript">
                alert('Le contact à bien été ajouté !');
            </script>
        <?php
    }   
        
    
    public static function getNewId(){
        $idMax = 1;
        $objPdo = PdoConnexion::getPdoConnexion();
        $req = "SELECT * FROM clients";
        $reponse = $objPdo->query($req);
        $donnees = $reponse->fetchAll();
        foreach($donnees as $ligne){
            $idMax = $idMax + 1;
        }
        return $idMax;
    }
    
    public static function loadOneContact($id){
        $objPdo = pdoConnexion::getPdoConnexion();
        $req = 'SELECT * FROM clients WHERE id_contact = '.$id;
        $reponse = $objPdo->query($req);
        $tab_reponse = $reponse->fetchAll();
        foreach($tab_reponse as $ligne){
            $intId = $ligne['id_contact'];
            $strNom = $ligne['nom_contact'];
            $strPrenom = $ligne['prenom_contact'];
            $strSociete = $ligne['societe_contact'];
            $strMail = $ligne['email_contact'];
            $strTel = $ligne['telephone_contact'];
 
        }
        $objContact = new Contact($intId, $strNom, $strPrenom, $strSociete, $strMail, $strTel);
        return $objContact;
    }
    public static function modifContact($id, $nom, $prenom, $societe, $mail, $tel){
        $objPdo = pdoConnexion::getPdoConnexion();   
        $req = $objPdo->prepare('UPDATE clients SET nom_contact = ?, prenom_contact= ?, societe_contact = ?, email_contact = ?, telephone_contact = ? WHERE id_contact = ?');
        $req->execute(array($nom, $prenom, $societe, $mail, $tel, $id))or die(print_r($objPdo->errorInfo(), true));
    }
            
}
