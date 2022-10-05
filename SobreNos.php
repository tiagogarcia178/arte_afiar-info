<?php
class SobreNos{
    private $id;
    private $texto_um;
    private $texto_dois;

    public function __construct($id, $texto_um, $texto_dois){
        $this->id=$id;
        $this->texto_um=$texto_um;
        $this->texto_dois=$texto_dois;
    }
    public function setTexto_um($texto_um){
        $this->texto_um = $texto_um;
    }
    public function setTexto_dois($texto_dois){
        $this->texto_dois = $texto_dois;
    }
    public function getTexto_um(){
        return $this->texto_um;
    }
    public function getTexto_dois(){
        return $this->texto_dois;
    }
}

?>