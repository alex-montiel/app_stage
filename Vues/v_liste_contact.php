<?php 
require_once('../Passerelles/pdoContacts.php');
include '../src/header.php';
?>

<script type="text/javascript">
    function openModif(id, nom, prenom, societe, mail, tel){
        var win;
        win = window.open("", "Modifier");
        if(win.location == "about:blank"){
            win.location = "c_contacts.php?action=modifier&id=" + id;
        }
    }
</script>

<table id='liste_contacts' border ='1'>
    <caption>Liste des contacts</caption>
    <tr>
        <th></th>
        <th>Numero</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Societe</th>
        <th>Adresse mail</th>
        <th>Téléphone</th>
    </tr>
      
<?php
    $tabContacts = pdoContacts::load_all_contacts();
    foreach($tabContacts as $unContact){
        ?>
    
        <tr>
            <th><a id="myLink" href="#" onclick="openModif(<?php echo $unContact->getId(); ?>)">Modifier </a></th>
            <th><?php echo $unContact->getId();?></th>
            <th><?php echo $unContact->getNom();?></th>
            <th><?php echo $unContact->getPrenom();?></th>
            <th><?php echo $unContact->getSociete(); ?></th>
            <th><?php echo $unContact->getMail();?></th>
            <th><?php echo $unContact->getTel();?></th>
        </tr>
    <?php } ?>
</table>
        
   


