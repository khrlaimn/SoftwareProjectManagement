@extends('layouts.app3')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1>List System Application</h1></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Student ID</td>
                        <td>{{$businessUnit->picName}}</td>
                    </tr>
                    <tr>
                        <td>Student Name</td>
                        <td>{{$businessUnit->requestType}}</td>
                    </tr>
                    <tr>
                        <td>Student Mobile</td>
                        <td>{{$businessUnit->description}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <a class="btn btn-warning " href="{{route('BusinessUnit.index')}}">Back</a>
            <a class="btn btn-primary" href="{{route('BusinessUnit.edit',$businessUnit->id)}}">Edit Details</a>
        </div>

    </div>
@endsection