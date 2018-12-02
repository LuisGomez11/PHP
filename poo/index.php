<?php

class automovil{

    public $motor;
    public $modelo;
    public $marca;
    public $nombre;
    
    function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    function getNombre(){
        return $this -> nombre;
    }

    function cambiarEstado(){

    }
    function avanzar(){

    }
    function frenar(){

    }
    function girar(){

    }


}

$corvette = new automovil();

$corvette -> setNombre('Corvette');

echo "<p>", $corvette -> getNombre(), "</p>";

$mustang = new automovil();

$mustang -> setNombre('Mustang');

echo $mustang -> getNombre();

?>