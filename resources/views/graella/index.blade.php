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
        <a href="{{route('graella.create')}}" class="btn btn-primary">Add</a>
    </div>
    <h3 align="center">Graella Data</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID Programa</th>
                <th>ID Canal</th>
                <th>Hora</th>
                <th>Dia</th>
                <th>Edit</th>
                <th>Delete</th>
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
                $row['id'])}}" class="btn btn-warning">Edit</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection