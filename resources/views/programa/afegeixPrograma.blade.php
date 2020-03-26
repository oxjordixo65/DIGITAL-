@extends('master')

@section('content')
<div>
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{\Session::get('success')}}
    </div>
    @endif
    <form action="{{url('programa')}}" method="POST">
        {{csrf_field()}}
        <br>
        <h3>Introdueix les dades del programa</h3>
        <br><br>
        Nom Programa:&nbsp;&nbsp;
        <input type="text" name="nom_programa">
        <br>
        Descripcio:&nbsp;&nbsp;
        <input type="text" name="descripcio">
        <br>
        Tipus:&nbsp;&nbsp;
        <input type="text" name="tipus">
        <br>
        Classificacio:&nbsp;&nbsp;
        <input type="text" name="classificacio">
        <br><br>
        <input value="Envia dades" type="submit" class="btn btn-primary">
    </form>
</div>
@endsection