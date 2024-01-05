@extends('layouts.app3')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of Projects</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('project.create')}}">Add New</a>
            <table class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Duration</th>
                <th>Lead Developer</th>
                <th>Developer</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @php($i=1)
                @foreach($projects as $p)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{date('d-m-Y', strtotime($p->start_date))}}</td>
                        <td>{{date('d-m-Y', strtotime($p->end_date))}}</td>
                        <td>{{$p->duration}} days</td>
                        <td>{{$p->leadDeveloper}}</td>
                        <td>{{$p->developer}}</td>
                        <td>{{$p->status}}</td>
                        <td>
                            <form action="{{route('project.destroy',$p->projectId)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('BusinessUnit.destroy',$p->projectId)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('BusinessUnit.edit',$p->projectId)}}">Edit</a>
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
