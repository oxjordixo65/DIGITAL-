<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <title>Formulari per afegir dades a la taula programa de la base de dades digital</title>

    @if(\Session::has('Exit'))
    <div class="alert alert-success">
        <p>{{\Session::get('Exit')}}</p>
    </div>
    @endif
    <form action="{{url('programa')}}" method="POST">
        {{csrf_field()}}
        <br>
        <b>Introudeix les dades del programa:<br><br>
        </b>
        Nom Programa:
        <input type="text" name="nom_programa">
        <br>
        Descripcio:
        <input type="text" name="descripcio">
        <br>
        Tipus:
        <input type="text" name="tipus">
        <br>
        Classificacio:
        <input type="text" name="classificacio">
        <br>
        <br><br>
        <input value="Envia dades" type="submit">
    </form>

</body>

</html>