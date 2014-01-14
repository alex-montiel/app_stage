<!DOCTYPE html>
<?php 

class PdoConnexion{
    
    public static function getPdoConnexion(){
        $objPdo = new PDO('mysql:host=localhost; dbname=bddappli','root', '');
        return $objPdo;
    }
    /**
     *Fonction qui vérifie l'existence des identifiants saisis dans la 
     * fenêtre de connection
     * @return true ou false
     */
    public static function verifConnexion($login, $mdp){
        $objPdo = PdoConnexion::getPdoConnexion();       
        $stmt = $objPdo->prepare("SELECT * FROM administrateurs WHERE login=? AND password=?;");
        $stmt->execute(array($login, $mdp));
        $donnees = $stmt->fetch();       
        if($donnees){
            return true;
        }
        else{
            return false;
        }
    }   
}
