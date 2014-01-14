<?php

class Contact
{
    private $_idClient;
    private $_nomClient;
    private $_prenomClient;
    private $_societe;
    private $_mailClient;
    private $_telClient;
    
    function Contact($id, $nom, $prenom,$societe, $mail, $tel){
        $this->_idClient = $id;
        $this->_nomClient = $nom;
        $this->_prenomClient = $prenom;
        $this->_societe = $societe;
        $this->_mailClient = $mail;
        $this->_telClient = $tel;
    }
    
    function getId(){
        return $this->_idClient;
    }
    
    function getNom(){
        return $this->_nomClient;
    }
    
    function getPrenom(){
        return $this->_prenomClient;
    }
    
    function getSociete(){
        return $this->_societe;
    }
    
    function getMail(){
        return $this->_mailClient;
    }
    
    function getTel(){
        return $this->_telClient;
    }
    
    function setNom($nom){
        $this->_nomClient = $nom;
    }
    
    function setPrenom($prenom){
        $this->_prenomClient = $prenom;
    }
    
    function setSociete($societe){
        $this->_societe = $societe;
    }
    
    function setMail($mail){
        $this->_mailClient = $mail;
    }
    
    function setTel($tel){
        $this->_telClient = $tel;
    }
}