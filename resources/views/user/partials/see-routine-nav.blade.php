<section class="nav-menu">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand" href="/">LU Routine</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            @if(Auth::check())
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    
                                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}"> <button>
                                            Dashboard</button></a>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
