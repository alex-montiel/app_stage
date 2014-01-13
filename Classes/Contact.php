<?php

class Contact
{
    private $idClient;
    private $nomClient;
    private $prenomClient;
    private $mailClient;
    private $telClient;
    
    function getId(){
        return idClient;
    }
    
    function getNom(){
        return nomClient;
    }
    
    function getPrenom(){
        return prenomClient;
    }
    
    function getMail(){
        return mailClient;
    }
    
    function getTel(){
        return telClient;
    }
    
    function setNom($nom){
        $this->nomClient = $nom;
    }
    
    function setPrenom($prenom){
        $this->prenomClient = $prenom;
    }
    
    function setMail($mail){
        $this->mailClient = $mail;
    }
    
    function setTel($tel){
        $this->telClient = $tel;
    }
}




