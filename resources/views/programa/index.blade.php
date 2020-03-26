@extends('master')

@section('content')


<div>
    </br>
    </br>
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
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection