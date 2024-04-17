@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Enter Subdomain</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/subdomain') }}">
                            @csrf
                            <div class="form-group">
                                <label for="subdomain">Subdomain</label>
                                <input type="text" class="form-control" id="subdomain" name="subdomain"
                                    placeholder="Enter Subdomain">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
