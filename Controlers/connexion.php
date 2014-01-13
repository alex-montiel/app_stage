<!DOCTYPE html>

<?php
    
    function connect_pdo(){
        try
        {
            $objPdo = new Pdo('mysql:host=localhost;dbname=bddappli', 'test', '');
        }
        catch(exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $objPdo;
    }
