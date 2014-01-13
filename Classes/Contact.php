<?php

class Contact
{
    private $idClient;
    private $nomClient;
    private $prenomClient;
    private $mailClient;
    private $telClient;
    
    function Contact{
        
    }
    
    function getId(){
        return $this->idClient;
    }
    
    function getNom(){
        return $this->nomClient;
    }
    
    function getPrenom(){
        return $this->prenomClient;
    }
    
    function getMail(){
        return $this->mailClient;
    }
    
    function getTel(){
        return $this->telClient;
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




