<?php

class pdoContacts{
    public static function  load_all_contacts(){
        $objPdo = connect_pdo();
        $req = 'SELECT * FROM contacts';
        $reponse = $objPdo->query($req);
        $tab_reponse = $reponse->fetchAll();

        foreach($tab_reponse as $ligne){
            $intId = $ligne['id_contact'];
            $strNom = $ligne['nom_contact'];
            $strPrenom = $ligne['prenom_contact'];
            $strMail = $ligne['mail_contact'];
            $strTel = $ligne['tel_contact'];
            $objContact = new Contact($intId, $strNom, $strPrenom, $strMail, $strTel);
            $tabContact[] = $objContact;
        }   
        return $tabContact;
}

}
