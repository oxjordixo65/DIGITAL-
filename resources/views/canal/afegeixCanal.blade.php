<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari per afegir dades a la taula canals de la base de dades digital</title>
</head>

<body>


    @if(\Session::has('Exit'))
    <div class="alert alert-success">
        <p>{{\Session::get('Exit')}}</p>
    </div>
    @endif
    <form action="{{url('canal')}}" method="POST">
        {{csrf_field()}}
        <br>
        <b>Introudeix les dades del canal:<br><br>
        </b>
        Nom Canal:
        <input type="text" name="nom_canal">

        <br><br>
        <input value="Envia dades" type="submit">
    </form>

</body>

</html>