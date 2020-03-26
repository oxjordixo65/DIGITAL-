<?php

$user = "admin";

$path = storage_path();

$app_path = storage_path('app');
$file_path = storage_path('app/public/login.txt');

$file = fopen($file_path, "r");
$password = "";
$password = fread($file, "10");
fclose($file);



if ($user!=$_POST["user"] || $password != $_POST["password"] ) {

    //NO FUNCIONA el mustache en php por lo que he usado el die para mandarlo a la mierda en caso de que el user o password sea incorrecto
    
    die("Conexion erronea");
}
session_start();
$_SESSION["admin"] = $password;
echo "Conexion establecida como ".$_POST["user"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Afegir</h3>
    <form action="{{url('canalGet')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Canal"/>
    </form>

    <form action="{{url('programaGet')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Programa"/>
    </form>

    <form action="{{url('graellaGet')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Graella"/>
    </form>
</body>

</html>