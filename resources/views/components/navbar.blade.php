@props(['username' => '', 'nim' => ''])

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">TUGASSS!! </a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('dashboard', ['username' => $username, 'nim' => $nim]) }}">Dashboard</a>
            <a class="nav-link" href="{{ route('pengelolaan', ['username' => $username, 'nim' => $nim]) }}">Pengelolaan</a>
            <a class="nav-link" href="{{ route('profile', ['username' => $username, 'nim' => $nim]) }}">Profil</a>
            <a class="nav-link" href="{{ route('login') }}"
                onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
        </div>
    </div>
</nav>
