<?php 
require '../Passerelles/pdoContacts.php';
include '../src/header.php';
?>
<table id='liste_contacts' border ='1'>
    <caption>Liste des contacts</caption>
    <tr>
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
            <th><?php echo $unContact->getId();?></th>
            <th><?php echo $unContact->getNom();?></th>
            <th><?php echo $unContact->getPrenom();?></th>
            <th><?php echo $unContact->getSociete(); ?></th>
            <th><?php echo $unContact->getMail();?></th>
            <th><?php echo $unContact->getTel();?></th>
        </tr>
    <?php } ?>
</table>
<p>Pour ajouter un autre contact, cliquez sur ce bouton :</p>
<a href='Vues/v_ajout_contact.php' ><input type='submit' name='button_ajout' value='ajouter'></a>
        
   


