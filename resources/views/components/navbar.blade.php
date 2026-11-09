@props(['username' => ''])

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">TUGASSS!! </a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
            <a class="nav-link" href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
            <a class="nav-link" href="{{ route('profile', ['username' => $username]) }}">Profil</a>
        </div>
    </div>
</nav>
