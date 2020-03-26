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
    <form action="{{url('graella')}}" method="POST">
        {{csrf_field()}}
        <br>
        <h3>Introdueix les dades del programa</h3>
        <br><br>
        ID Canal:&nbsp;&nbsp;
        <input type="number" name="canal_id">
        <br>
        ID Programa:&nbsp;&nbsp;
        <input type="number" name="programa_id">
        <br>
        Hora:&nbsp;&nbsp;
        <input type="time" name="hora">
        <br>
        Dia:&nbsp;&nbsp;
        <input type="date" name="dia">
        <br><br>
        <input value="Envia dades" type="submit" class="btn btn-primary">
    </form>
</div>
@endsection