<?php
class Slider{
    private $id;
    private $titulo;
    private $texto;

    public function __construct($id, $titulo, $texto){
        $this->id=$id;
        $this->titulo=$titulo;
        $this->texto=$texto;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setTexto($texto){
        $this->texto = $texto;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getTexto(){
        return $this->texto;
    }
}

?>