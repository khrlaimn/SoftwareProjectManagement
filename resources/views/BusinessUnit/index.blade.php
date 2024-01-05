

@extends('layouts.app3')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of Students</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('BusinessUnit.create')}}">Add New</a>
            <table class="table">
            <thead>
                <tr><th>No.</th><th>PIC Name</th><th>Request Type</th><th>Description</th><th>Status</th><th>Action</th></tr>
            </thead>
            <tbody>
            @php($i=1)
                @foreach($businessUnits as $s)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$s->picName}}</td>
                        <td>{{$s->requestType}}</td>
                        <td>{{$s->description}}</td>
                        <td>{{$s->status}}</td>
                        <td>
                            <form action="{{route('BusinessUnit.destroy',$s->buId)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('BusinessUnit.destroy',$s->buId)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('BusinessUnit.edit',$s->buId)}}">Edit</a>
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
