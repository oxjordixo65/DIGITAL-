<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Formulari per afegir dades a la taula alumns de la base de dades proj2</title>
    <font face="Arial">
      @if(\Session::has('Exit'))
        <div class="alert alert-success">
          <p>{{\Session::get('Exit')}}</p>
        </div>
      @endif
      <form action="{{url('alumn')}}" method="POST">
      {{csrf_field()}}
        <br>
        <b>Introudeix les dades del nou alumne:<br><br>
        </b>
        Nom Alumne:
        <input type="text" name="nom">
        <br>
        Cognom 1:
        <input type="text" name="cognom1">
        <br>
        Cognom 2:
        <input type="text" name="cognom2">
        <br><br>
        <input value="Envia dades" type="submit">
      </form>
    </font>
  </body>
</html>
