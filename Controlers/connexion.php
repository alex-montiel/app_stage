<!DOCTYPE html>

<?php

    function connect_pdo(){
        try
        {
            $objPdo = new PDO('mysql:host=127.0.0.1;dbname=bddappli', 'root', '');
        }
        catch(exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $objPdo;
    }
