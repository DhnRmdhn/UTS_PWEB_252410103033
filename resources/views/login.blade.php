@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h4 class="mb-3">Masuk</h4>
                <form action="{{ route('login.proses') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">nama</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                     <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
