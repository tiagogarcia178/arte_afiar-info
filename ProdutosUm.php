<?php
class Produto{
    private $id;
    private $titulo;

    public function __construct($id, $titulo){
        $this->id=$id;
        $this->titulo=$titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
   
    public function getTitulo(){
        return $this->titulo;
    }
}