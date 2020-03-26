@extends('master')

@section('content')

@if(\Session::has('success'))
<div class="alert alert-success" role="alert">
    {{\Session::get('success')}}
</div>
@endif
<div>
    </br>
    </br>
    <div align="right">
        <a href="{{route('canal.create')}}" class="btn btn-primary">Add</a>
    </div>
    <h3 align="center">Canal Data</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nom Canal</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($canals as $row)
            <tr>
                <td>{{$row['nom_canal']}}</td>
                <td><a id="btnEdit" href="{{action('canalctl@edit', 
                $row['id'])}}" class="btn btn-warning">Edit</a></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection