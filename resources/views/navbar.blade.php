<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">LaravelApp</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="{{ url('siswa') }}">Siswa</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('about') }}">About</a></li>
            </ul>
            <ul class="navbar-nav right">
                <li class="nav-item"><a class="nav-link active" href="#">Login</a></li>
                <li class="nav-item dropdown"></li>
            </ul>
        </div>
    </div>
</nav>
