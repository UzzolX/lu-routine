<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LU ROUTINE</title>
    @include('user.partials.head')
</head>

<body>
    <!--top area start-->
    @include('user.partials.nav')
    <section>
        <div class="main-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="top-slider">
                            <div class="contain">
                                <h3>Welcome To LU Routine </h3>
                                <p>A web appliction to make routine</p>
                                {{-- <a href="{{ route('dashboard.index') }}"><button>Get Started Now</button></a><br> --}}
                                <a href="{{ route('see-routine.index') }}"><button style="margin-top:10px;">See
                                        Routine</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="wave">
                <img src="{{asset('frontend-asstets/assets/image/wave.png')}}" alt="">
            </div>

            <div class="pic">
                <img src="{{asset('frontend-asstets/assets/image/w2.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <!--top area end-->
    @include('user.partials.footer')
</body>

</html>
