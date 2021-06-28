<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">DC-Comics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    {{-- !!!!!!! IMPORTANTE !!!!!!! class="{{ (request()->is('nome della route')) ? 'active' : '' }} nav-link" ===>> aggiunge la classe active quando ci si trova su quella pagina --}}
                    <a class="{{ request()->is('/') ? 'active' : '' }} nav-link" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="{{ request()->is('comics') ? 'active' : '' }} nav-link" aria-current="page"
                        href="{{ route('comics.index') }}">My Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ( Request::route()->getName() === 'comics.create') active @endif" href="{{ route('comics.create') }}">Add Comics</a>
                   </li>

            </ul>
        </div>
    </div>
</nav>
