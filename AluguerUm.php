<?php

class Aluguer{
    private $id;
    private $texto;

    public function __construct($id, $texto){
        $this->id=$id;
        $this->texto=$texto;
    }
    public function getTexto(){
        return $this->texto;
    }

    public function setTexto($texto){
        $this->texto = $texto;

    }
    
}  