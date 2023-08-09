<nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/template') }}/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark"
                height="17">
            {{-- <img src="{{ asset('assets/template') }}/images/logo-light.png" class="card-logo card-logo-light"
                alt="logo light" height="17"> --}}
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link fs-15 active" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="#plans">Plans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-15" href="#contact">Contact</a>
                </li>
            </ul>

            <div class="">
                <a href="{{ route('auth.sign-in') }}" class="btn btn-link fw-medium text-decoration-none text-dark">Sign
                    in</a>
                <a href="{{ route('auth.sign-up') }}" class="btn btn-primary">Sign Up</a>
            </div>
        </div>

    </div>
</nav>
