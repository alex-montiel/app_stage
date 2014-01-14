<?php

include 'Passerelles/pdoConnexion.php';

//On récupère les informations du formulaire de connect.php
$login = filter_input(INPUT_POST, 'login');
$password = filter_input(INPUT_POST, 'password');

//Puis on appelle la fonction qui vérifie ces identifiants
$autorisation = PdoConnexion::verifConnexion($login, $password);

if($autorisation == true){
    ?>
    <script type="text/javascript">
        alert('Vous êtes maintenant connectés'); 
    </script>
    <?php
    include 'Controlers/c_contacts.php';
}
else{
    ?>
    <script type="text/javascript">
        alert('<?php echo $login; echo $password; ?>');
    </script>
    <?php
    include 'connect.php';
}



