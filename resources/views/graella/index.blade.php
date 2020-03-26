@extends('master')

@section('content')


<div>
    </br>
    </br>
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
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection