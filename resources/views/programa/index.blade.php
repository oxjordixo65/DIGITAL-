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
        <a id="addBtn" href="{{route('programa.create')}}" class="btn btn-primary">Add</a>
    </div>
    <h3 align="center">Programa Data</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nom Programa</th>
                <th>Descripcio</th>
                <th>Tipus</th>
                <th>Classificacio</th>
                <th id="editTH">Edit</th>
                <th id="deleteTH">Delete</th>
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
                $row['id'])}}" class="btn btn-warning editBtn">Edit</td>
                <td>
                    <form class="deleteBtn" action="{{action('programactl@destroy',$row['id'])}}" method="POST" class="delete_form">
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