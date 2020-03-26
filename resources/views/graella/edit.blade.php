@extends('master')

@section('content')

<div>
    </br>
    </br>
    <h3 align="center">Edit Record</h3>
    <br />
    @if(count($errors) > 0)
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
    <form action="{{action('graellactl@update',$id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
        <input type="number" name="programa_id" class="form-control" value="{{$graellas->programa_id}}" placeholder="Enter programa ID" />
        <input type="number" name="canal_id" class="form-control" value="{{$graellas->canal_id}}" placeholder="Enter canal ID" />
        <input type="time" name="hora" class="form-control" value="{{$graellas->hora}}" placeholder="Enter hora" />
        <input type="date" name="dia" class="form-control" value="{{$graellas->dia}}" placeholder="Enter dia" />
        <input type="submit" class="btn btn-primary" value="Edit" />
    </form>
</div>
@endsection