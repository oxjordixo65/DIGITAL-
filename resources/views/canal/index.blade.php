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
        <a id="addBtn" href="{{route('canal.create')}}" class="btn btn-primary">Add</a>
    </div>
    <h3 align="center">Canal Data</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nom Canal</th>
                <th>Image</th>
                <th id="editTH">Edit</th>
                <th id="deleteTH">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($canals as $row)
            <tr>
                <td>{{$row['nom_canal']}}</td>
                <td>{{$row['image']}}</td>
                <td><a id="btnEdit" href="{{action('canalctl@edit', 
                $row['id'])}}" class="btn btn-warning editBtn">Edit</a></td>
                <td>
                    <form class="deleteBtn" action="{{action('canalctl@destroy',$row['id'])}}" method="POST" class="delete_form">
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