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
        <a id="addBtn" href="{{route('graella.create')}}" class="btn btn-primary">Add</a>
    </div>
    <h3 align="center">Graella Data</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID Programa</th>
                <th>ID Canal</th>
                <th>Hora</th>
                <th>Dia</th>
                <th id="editTH">Edit</th>
                <th id="deleteTH">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($graellas as $row)
            <tr>
                <td>{{$row['programa_id']}}</td>
                <td>{{$row['canal_id']}}</td>
                <td>{{$row['hora']}}</td>
                <td>{{$row['dia']}}</td>
                <td><a id="btnEdit" href="{{action('graellactl@edit', 
                $row['id'])}}" class="btn btn-warning editBtn">Edit</td>
                <td>
                    <form class="deleteBtn" action="{{action('graellactl@destroy',$row['id'])}}" method="POST" class="delete_form">
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