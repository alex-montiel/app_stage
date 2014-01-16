<?php 
require_once('../Passerelles/pdoContacts.php');
include '../src/header.php';

?>
<script type="text/javascript">
    function openModif(url){
        
        var win;
        if(url == 'accueil'){
            win = window.open("", "Accueil");
            alert (win.name);
            win.focus("Accueil");
        }
        else{
            win = window.open("", "Afficher")
        }
            
        if(win.location == "about:blank"){
            win.location = "c_contacts.php?action=" + url;
        }
    }
</script>
<?php


$id = $_REQUEST['id'];
$objContact = pdoContacts::loadOneContact($id);
?>
<form id='form_modif' method='POST' action='../Controlers/c_contacts.php?action=valid_modifier&id=<?php echo $id; ?>'>
    <h2>Modifiez les informations que vous souhaitez</h2>
    <label for="id_contact">ID : </label>
    <input type='text' value="<?php echo $id; ?>" name="id" id="id_contact" readonly><br />
    <label for='nom_contact'>Nom : </label>
    <input type='text' value="<?php echo $objContact->getNom() ; ?>" name='nom' id='nom_contact'><br />
    <label for='nom_contact'>Prenom : </label>
    <input type='text' value="<?php echo $objContact->getPrenom(); ?>" name='prenom' id='prenom_contact'><br />
    <label for='nom_contact'>Societe : </label>
    <input type='text' value="<?php echo $objContact->getSociete(); ?>" name='societe' id='societe_contact'><br />
    <label for='nom_contact'>Mail : </label>
    <input type='text' value="<?php echo $objContact->getMail(); ?>" name='mail' id='mail_contact'><br />
    <label for='nom_contact'>Telephone : </label>
    <input type='text' value="<?php echo $objContact->getTel(); ?>" name='telephone' id='telephone_contact'><br />
    
    <input type='submit' value='Modifier'><br /><br />
</form>
<a href='#' onclick="openModif('accueil')">Retour à l'accueil</a><br />
<a href='#' onclick="openModif('afficher')">Retour à la liste des contacts</a>

