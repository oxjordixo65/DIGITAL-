@extends('master')

@section('content')


<div>
    </br>
    </br>
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
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection