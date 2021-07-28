 <section class="nav-menu">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid p-0">
                            <a class="navbar-brand" href="/">
                                <img src="{{asset('frontend-asstets/assets/image/logo/logo.png')}}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('about.index')}}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('alpha.index')}}">Quantum X Alpha</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('research.index')}}">Research </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('faq.index')}}">FAQ</a>
                                    </li>
                                    <li class="nav-items">
                                        <a class="nav-link" href="{{route('contact.index')}}"><button>Contact</button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>