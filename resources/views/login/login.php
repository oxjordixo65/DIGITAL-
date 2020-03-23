<?php
echo "entro al login";

$nombre="admin";

$path = storage_path();

$app_path = storage_path('app');
$file_path = storage_path('app/public/login.txt');

$file = fopen($file_path, "r");
$password = "";
$password=fread($file,"10");
fclose($file);


echo $password;
if($password==$_POST["password"]){
    session_start();
    $_SESSION["admin"]=$password;
    echo "mu bien";
    //header('Location: ./canals/afegeixCanal.php');
    header('Location: canal');

    //NO FUNCIONA ARREGLAR
    echo "<form action=\"{{url('canal')}}\" method=\"get\">
            <input type=\"submit\"/>
        </form>";
}
