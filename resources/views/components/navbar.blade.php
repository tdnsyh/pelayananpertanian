<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">DPKPP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
            </ul>
            <span class="navbar-text">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary text-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-success">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-info">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </span>
        </div>
    </div>
</nav>
