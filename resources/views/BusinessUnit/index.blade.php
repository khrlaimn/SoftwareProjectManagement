@extends('layouts.app3')

@section('content')
  
  <div class="col-lg-8 d-flex align-items-stretch" >
  @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
              <div class="card-body p-4" style="width: 80rem;">
                <h5 class="card-title fw-semibold mb-4"> List System Application</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No.</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">PIC Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Request Type</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Description</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                      @foreach($businessUnits as $b)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$i++}}</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$b->picName}}</h6>                         
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">{{$b->requestType}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$b->description}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">{{$b->status}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <form action="{{route('BusinessUnit.destroy',$b)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning" href="{{route('BusinessUnit.edit',$b->id)}}">Edit</a>
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE?')">
                            </form>
                        </td>
                      </tr> 
                      @endforeach
                    </tbody>
                    <a class="btn btn-primary float-end" href="{{route('BusinessUnit.create')}}">Add New</a>
                  </table>
                </div>
              </div>
            </div>
          
        </div>
        

@endsection