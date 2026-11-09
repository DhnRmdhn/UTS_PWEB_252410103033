@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm text-center">
                <div class="card-body p-4">
                    <h4>{{ $username }}</h4>
                    <p class="text-muted mb-0">NIM: {{ $nim }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection