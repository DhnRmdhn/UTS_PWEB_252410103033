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

    <div class="row g-3 mt-2 justify-content-center">
        <div class="col-md-5">
            <div class="card h-100 progress-card">
                <div class="card-body">
                    <h6 class="text-muted text-center">Progress Tugas</h6>
                    <div class="progress progress-track" style="height: 24px;">
                        <div class="progress-bar" style="width: {{ $persen }}%">{{ $persen }}%</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="text-muted">Deadline Terdekat</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($terdekat as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $item['tugas'] }} <br> <small class="text-muted">({{ $item['matkul'] }})</small></span>
                                <span class="badge bg-danger text-nowrap px-3 py-2">{{ $item['deadline'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
