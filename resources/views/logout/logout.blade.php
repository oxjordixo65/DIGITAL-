<?php

session_start();

if (!$_SESSION["admin"]) {

    

    die("No te has logueado ni siquiera");
}
unset($_SESSION['admin']);
echo "Conexion como admin finalizada";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ URL::asset('js/removeAdmin.js') }}"></script>
</head>

<body>
    <!-- <h3>Afegir</h3>
    <form action="{{url('canalGet')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Canal" />
    </form>

    <form action="{{url('programaGet')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Programa" />
    </form>

    <form action="{{url('graellaGet')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Graella" />
    </form> -->

    <form action="{{url('/')}}" method="get">
        {{csrf_field()}}
        <input type="submit" value="Tornar" />
    </form>
</body>

</html>