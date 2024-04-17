@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-4">Welcome to our website ({{ tenant('id') }})</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptate, quod, voluptatum, quae voluptas quibusdam fugit nemo doloremque quia quidem tempora aperiam. Quisquam, voluptate, quod, voluptatum, quae voluptas quibusdam fugit nemo doloremque quia quidem tempora aperiam.</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="https://eldersell.com/wp-content/uploads/2015/08/Update-Website.jpg" alt="Welcome" class="img-fluid">
        </div>
    </div>
</div>
@endsection
