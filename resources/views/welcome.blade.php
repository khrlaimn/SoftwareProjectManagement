@extends('layouts.app2')

@section('content')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8 col-lg-6 col-xxl-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="./index.html" class="text-nowrap logo-img d-block py-3 w-100">
                            <img src="../assets/images/logos/SoftwareProjectManagement.jpeg" width="200" alt="Logo">
                        </a>
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-4">Welcome to ITMS: Software Management System</h5>
                                <p class="mb-0">Develop by</p>
                                <p class="mb-0">Muhammad Khairul Aiman Bin Ahmad Faiza, SW01082162</p>
                            </div>
                        </div>

                        @if (Route::has('login'))
                        <div class="mt-4">
                            @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
