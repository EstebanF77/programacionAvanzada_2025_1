<?php

function saludar(){
    echo 'hola<br>';
}

saludar();

function getSaludo() {
    return 'hola';
}

echo getSaludo();

function saludarDos($nombre){
    echo "hola $nombre";
}
saludarDos("pepe");


function saludarTres ($nombre,$apellido){
    echo "hola $nombre $apellido<br>";
}
saludarTres('pepe','abc');

function saludarCuarto($nombre, $apellido=null){
    if (empty($apellido)){
        echo "hola $nombre <br>";
    } else{
        echo "hola $nombre $apellido<br>";
    }

}
saludarCuarto('ana');  //no es obligatorio el apellido 

function saludarCinco (...$parans){
    $nombre = $parans[0];
    $apellido=$parans[1];
    $edad=$parans[2];


}
saludarCinco("pedro","LKJ",25,"si",1.80,false) ;

function saludarSeis(string $nombre){ //es flexible a cualquier tipo de dato por lo cual es importanete definir el tipo
    echo "hola $nombre<br>";
}
$numero =2;
