@extends('layouts.app3')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('BusinessUnit.store')}}">
            @csrf
            <div class="card">
                <div class="card-header">Add New Application</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>PIC Name</td>
                            <td><input class="form-control @error('picName') is-invalid @enderror" name="picName" value="{{ old('picName') }}"></td>
                            @error('picName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </tr>
                        <tr>
                            <td>Request Type</td>
                            <div>
                            <td><select class="form-select @error('requestType') is-invalid @enderror" name="requestType" value="{{ old('requestType') }}">
                                    <option value="New">New</option>
                                    <option value="Existing">Existing</option>
                                 </select>
                          </div>
                        </td>
                            @error('requestType')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><input class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"></td>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </tr>
                    </table>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-warning " href="{{route('BusinessUnit.index')}}">Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
