<nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img
                        src="{{ asset('assets/images/Kai-200-px.png') }}"
                        alt="Logo de color negro"
                        class="img-fluid logo-menu"
                    />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav mb-lg-0 mx-auto mb-2">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="{{ url('/') }}"
                            >
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#somos">
                                Quiénes somos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">
                                Nuestros servicios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#cotiza">Cotiza</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
