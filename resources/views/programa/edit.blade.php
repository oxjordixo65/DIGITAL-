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
    <form action="{{action('programactl@update',$id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
        <input type="text" name="nom_programa" class="form-control" value="{{$programas->nom_programa}}" placeholder="Enter nom programa" />
        <input type="text" name="descripcio" class="form-control" value="{{$programas->descripcio}}" placeholder="Enter descripcio" />
        <input type="text" name="tipus" class="form-control" value="{{$programas->tipus}}" placeholder="Enter tipus" />
        <input type="text" name="classificacio" class="form-control" value="{{$programas->classificacio}}" placeholder="Enter classificacio" />
        <input type="submit" class="btn btn-primary" value="Edit" />
    </form>
</div>
@endsection