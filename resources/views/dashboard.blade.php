@extends('layouts.app')
@section('title', 'Dashboard')


@section('content')

<h3 class="mb-4 text-center">Halo, {{ $username }}! INI DIAA TUGAS TUGASMUU 💀</h3>

    <div class="row g-3 justify-content-center">
        <div class="col-md-4" style="max-width: 320px;">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="card-title">Total Tugas</h6>
                    <h2 class="card-subtitle fg-3">{{ $jumlahTugas }}</h2>
                </div>                
            </div>
        </div>

        <div class="col-md-4" style="max-width: 320px;">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="card-title text-muted">Sudah Selesai</h6>
                    <h2 class="card-subtitle fg-3">{{ $selesai }}</h2>
                </div>
            </div>
        </div>


        <div class="col-md-4" style="max-width: 320px;">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h6 class="card-title text-muted">Deadline Terdekat</h6>
                    <h5 class="card-subtitle fg-3">{{ $deadlineTerdekat }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
