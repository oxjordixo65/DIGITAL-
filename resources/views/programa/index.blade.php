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
    <h3 align="center">Programa Data</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nom Programa</th>
                <th>Descripcio</th>
                <th>Tipus</th>
                <th>Classificacio</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programas as $row)
            <tr>
                <td>{{$row['nom_programa']}}</td>
                <td>{{$row['descripcio']}}</td>
                <td>{{$row['tipus']}}</td>
                <td>{{$row['classificacio']}}</td>
                <td><a id="btnEdit" href="{{action('programactl@edit', 
                $row['id'])}}" class="btn btn-warning">Edit</td>
                <td>
                    <form action="{{action('programactl@destroy',$row['id'])}}" method="POST" class="delete_form">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection