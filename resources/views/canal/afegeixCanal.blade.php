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
    <form action="{{url('canal')}}" method="POST">
        {{csrf_field()}}
        <br>
        <h3>Introdueix les dades del canal</h3>
        <br><br>
        </b>
        Nom Canal:&nbsp;&nbsp;
        <input type="text" name="nom_canal">
        <br><br>
        <input type="file" name="image">
        <input value="Envia dades" type="submit" class="btn btn-primary">
    </form>
</div>
@endsection