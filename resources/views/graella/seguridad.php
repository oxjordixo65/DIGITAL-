<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari per afegir dades a la taula graella de la base de dades digital</title>
</head>

<body>
    

    @if(\Session::has('Exit'))
    <div class="alert alert-success">
        <p>{{\Session::get('Exit')}}</p>
    </div>
    @endif
    <form action="{{url('graella')}}" method="POST">
        {{csrf_field()}}
        <br>
        <b>Introudeix les dades del programa:<br><br>
        </b>
        ID Canal:
        <input type="number" name="canal_id">
        <br>
        ID Programa:
        <input type="number" name="programa_id">
        <br>
        Hora:
        <input type="time" name="hora">
        <br>
        Dia:
        <input type="date" name="dia">
        <br>
        <br><br>
        <input value="Envia dades" type="submit">
    </form>

</body>

</html>