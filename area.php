<?php
include 'opp.php';
//se guarda en una variable el contenido del inmput llamdo arista
$arista= $_POST['arista'];

$base= $_POST['base'];
$altura= $_POST['altura'];

$cuadrado = new Cuadrado();
$cuadrado->set('lado',$arista);

$Triangulo = new Triangulo();
$Triangulo->set('base',$base);
$Triangulo->set('altura',$altura);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
</head>
<body>
    <h1>Area del cuadrado</h1>
    <p>
        <?php 
        echo $cuadrado->toString();
        
        ?> 
    </p>
    <h1>Area del triangulo</h1>
    <p>
        <?php 
        echo $Triangulo->toString();
        
        ?> 
    </p>
    <a href="index.html">Volver</a>

    
</body>
</html>