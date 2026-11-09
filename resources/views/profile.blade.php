@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow-sm profile-biodata text-center mb-4 profile-summary">
                <div class="card-body p-4">
                    <img src="{{ asset('assets/foto.jpg') }}" alt="Foto profil"
                         class="rounded-circle mb-3"
                         style="width: 96px; height: 96px; object-fit: cover;">
                    <h4 class="mb-1">{{ $username }}</h4>
                    <p class="text-muted mb-0">NIM: {{ $nim }}</p>
                </div>
            </div>

            <div class="card shadow-sm profile-biodata">
                <div class="card-body p-4">
                    <h6 class="text-muted mb-3">Biodata</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($biodata as $label => $isi)
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="text-muted">{{ $label }}</span>
                                <span class="fw-semibold">{{ $isi }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection