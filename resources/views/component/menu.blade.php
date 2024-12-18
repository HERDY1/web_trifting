<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <!-- Brand dengan Ikon -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-incognito" style="font-size: 1.5rem;"></i> <!-- Ikon untuk brand -->
            Trifting Website
        </a>
  
        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Data Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Data Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Data About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Data Contact</a>
                    </li>
                @endif
            </ul>
  
            <!-- Search Form -->
            <form class="d-flex ms-auto" action="{{ route('search.posts') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Cari postingan terbaru" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
  
        <!-- Buttons for non-authenticated users -->
        @if (!Auth::check())
            <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">Signup</a>
            <a href="{{ route('signin') }}" class="btn btn-outline-light">Signin</a>
        @else
            <!-- Logout Button with margin to the left -->
            <a href="{{ route('Logout') }}" class="btn btn-outline-light ms-2">Logout</a>
        @endif
    </div>
</nav>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
