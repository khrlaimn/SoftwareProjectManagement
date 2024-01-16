@extends('layouts.app2')

@section('content')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
<div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
            <div class="card-body">
            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="../assets/images/logos/SoftwareProjectManagement.jpeg" width="200" alt="">
            </a>
            <p class="text-center">{{ __('Login') }}</p>
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{ __('Email Address') }}</label>
                <input id="exampleInputEmail1" aria-describedby="emailHelp" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="col-md-6">
                    

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                </div>

                <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                <div class="col-md-6">       

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                
                <div class="row mb-1">
                    <div class="d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                        {{ __('Login') }}
                        </button>
                    </div>
                </div>


            </div>
         </form>
        </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection
