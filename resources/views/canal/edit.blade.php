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
    <form action="{{action('canalctl@update',$id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
        <input type="text" name="nom_canal" class="form-control" value="{{$canals->nom_canal}}" placeholder="Enter nom canal" />
        <input type="file" name="image" class="form-control" value="{{$canals->image}}" placeholder="Enter image" />
        <input type="submit" class="btn btn-primary" value="Edit" />
    </form>
</div>
@endsection