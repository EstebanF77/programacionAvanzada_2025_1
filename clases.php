<?php
class Persona{
    private $nombre; // el provate es un modificaddor de acceso 
    private $apellido;
    private $edad;
    private $pasatiempos;

    function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }




    function mayorEdad(){
        return $this->edad >= 18 ? 'si' : 'no';
    }


    function setEdad($edad){
        $this->edad = $edad;
    }
    function getEdad(){
        return $this->edad;
    }
}

$persona = new Persona('Pepe', 'Gomez', 35);
$persona->setEdad(18);
echo $persona->mayorEdad();