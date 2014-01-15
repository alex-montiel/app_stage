<h2>Veuillez remplir les différents champs du formulaire</h2>
<form id='form_ajout_contact' method='POST' action='c_contacts.php?action=valid_ajout'>
    <label for='nom_contact'>Nom : </label>
    <input type='text' name='nom_contact' id='nom_contact'><br />
    <label for='prenom_contact'>Prenom : </label>
    <input type='text' name='prenom_contact' id='prenom_contact'><br />
    <label for='societe_contact'>Societe : </label>
    <input type='text' name='societe_contact' id='societe_contact'><br />
    <label for='mail_contact'>E-Mail : </label>
    <input type='text' name='mail_contact' id='mail_contact'><br />
    <label for='telephone_contact'>Telephone : </label>
    <input type='text' name='telephone_contact' id='telephone_contact'><br />
    
    <input type='submit' name='button_valid_ajout' value='Ajouter'>
</form>
