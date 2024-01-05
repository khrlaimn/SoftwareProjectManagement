@extends('layouts.app3')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('project.store')}}">
            @csrf
            <div class="card">
                <div class="card-header">Add New Project</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td><input class="form-control" name="name">
                            @error('name')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </td>
                        </tr>
                        <tr>
                            <td>Start Date</td>
                            <td>
                                <input type="date" class="form-control" id="start_date" name="start_date" onchange="calcDuration(this.value)">
                   
                                @error('start_date')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </td>
                        </tr>
                        <tr>
                            <td>End Date</td>
                            <td><input type="date" class="form-control" id="end_date" name="end_date">
                            @error('end_date')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror</td>
                        </tr>
                        <tr>
                            <td>Duration (days)</td>
                            <td><input class="form-control" name="duration">
                            @error('duration')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </td>
                        </tr>
                        <tr>
                            <td>Lead Developer</td>
                            <td><input class="form-control" name="leadDeveloper">
                            @error('leadDeveloper')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </td>
                        </tr>
                        <tr>
                            <td>Developer</td>
                            <td><input class="form-control" name="developer">
                            @error('developer')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-warning " href="{{route('project.index')}}">Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
