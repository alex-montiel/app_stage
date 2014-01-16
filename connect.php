<?php 
require 'src/header.php'; 
?>

<h2>Veuillez vous authentifier pour continuer</h2>
<form id="connexion" method="POST" action="traitement_connexion.php">
    <label for="login">Identifiant : </label>
    <input type="text" id="login" name="login"/><br />
    <label for="password">Mot de passe : </label>
    <input type="password" id="password" name="password"/><br />   
    <input type="submit" id="btn_connexion" value="Se connecter">
</form>



