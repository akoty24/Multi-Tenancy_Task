<!-- resources/views/tenants.blade.php -->

@extends('layouts.app')

@section('title', 'Tenants')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All Tenants</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Tenant</th>
                                        <th>Domains</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenants as $tenant)
                                        <tr>

                                            <td>{{ $tenant->id }}</td>
                                            <td>
                                                <ul class="list-unstyled">
                                                    @foreach ($tenant->domains as $domain)
                                                        <li>{{ $domain->domain }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
