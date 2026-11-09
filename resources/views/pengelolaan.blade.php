@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h3 class="mb-4 text-center">Daftar Tugas</h3>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>Tugas</th>
                    <th>Deadline</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tugas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['matkul'] }}</td>
                        <td>{{ $item['tugas'] }}</td>
                        <td>{{ $item['deadline'] }}</td>
                        <td>
                            @if ($item['status'] == 'Selesai')
                                <span class="badge bg-success">{{ $item['status'] }}</span>
                            @elseif ($item['status'] == 'Dikerjakan')
                                <span class="badge bg-warning text-dark">{{ $item['status'] }}</span>
                            @else
                                <span class="badge bg-secondary">{{ $item['status'] }}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection