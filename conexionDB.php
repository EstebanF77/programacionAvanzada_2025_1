<?php
//VARIABLES QUE USAREMOS PARA LA CONCEXION A LA BASE DE DATOS
$hostDB ="localhost"; //direccion de la base de datos
$userDB="root"; //ususario de la db
$pwdDB=""; //contraseña de nuestra base de datos
$nameDB="programacion_avansada_db1"; //el nombre de la base de datos a la que me quiero concetar
//$portDB="3306"; 
//PUERTA DE LA BASE DE DATOS
$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB) ;  //Conexion a la base de datos

if($conexDB->connect_error){ //comprueba la conexion de la base de datos
    echo $conexDB->connect_error;
    die();
}
echo "Conexion exitosa <br>";

//consultar informacion de la base de datos
$sql = "select * from estudiantes";

//mandar el string "sql" para que busque en la db con query
$resultadosSQL = $conexDB->query($sql);

if($resultadosSQL->num_rows>0){ //el num_rows trae la consulta
    while($row=$resultadosSQL->fetch_assoc()){ //el fetch recorre las consultas 
        $id =$row['id'];
        $nombre = $row['nombre'];
        $cod = $row['codigo'];
        $email = $row['correo'];
        echo "$id $cod $nombre $email <br>";


    }
}else{
    echo "<br> No hay registros <br>";
}

$sql = "insert into estudiantes (codigo, nombre, correo) values";
$sql .= "(23555,'maria','maria@test.com')"; // .= permite cocatenar al valor anterior de la varibale el nuevo contenido
$resultadosSQL= $conexDB->query($sql);
if($resultadosSQL){
    echo "<br> datos guardados <br>";
}else{
    echo "no fue posible guarda la informacion";
}



$conexDB->close();