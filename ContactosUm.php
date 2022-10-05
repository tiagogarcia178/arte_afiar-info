<?php
 class Contactos{
    private $id;
    private $endereço;
    private $email_um;
    private $email_dois;
    private $telefone;

    public function __construct($id, $endereço, $email_um, $email_dois, $telefone){
        $this->id=$id;
        $this->endereço=$endereço;
        $this->email_um=$email_um;
        $this->email_dois=$email_dois;
        $this->telefone=$telefone;
    }
    public function setEndereço($endereço){
        $this->endereço = $endereço;
    }
    public function setEmailUm($email_um){
        $this->email_um = $email_um;
    }
    public function setEmailDois($email_dois){
        $this->email_dois = $email_dois;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
   
    public function getEndereço(){
        return $this->endereço;
    }
    public function getEmailUm(){
        return $this->email_um;
    }
    public function getEmailDois(){
        return $this->email_dois;
    }
    public function getTelefone(){
        return $this->telefone;
    }

 }