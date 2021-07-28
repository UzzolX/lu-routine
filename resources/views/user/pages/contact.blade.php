<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Quantam | About</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <main class="main-area graybg text-center pt-200 pb-100">
        <div class="container">
            <div class="row">
                <div class="title-light mb-100">
                    <h2 style="
                    display: inline-block; padding: 8px 15px; text-transform: uppercase;">
                        <span>Contacts </span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="full-ADDRESS">
                        <div class="title-light" style="text-align: left;">
                            <h4 style="
                            display: inline-block; padding: 8px 15px; text-transform: uppercase;">
                                <span>OUR</span> ADDRESS
                            </h4>
                        </div>
                        {{-- <div class="main-address" data-aos="fade-right" data-aos-duration="700">
                            <div class="single-address">
                                <img src="{{asset('frontend-asstets/assets/image/contact/1.svg')}}" alt="">
                                <div class="single-address-content">
                                    <span>Our Location</span>
                                    <p>43 Chaucer Road, London, E7 9LZ</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-address" data-aos="fade-right" data-aos-duration="700">
                            <div class="single-address">
                                <img src="{{asset('frontend-asstets/assets/image/contact/2.svg')}}" alt="">
                                <div class="single-address-content">
                                    <span>Our Phone Number</span>
                                    <p>(+44) 7375 018 586</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="main-address" data-aos="fade-right" data-aos-duration="700">
                            <div class="single-address">
                                <img src="{{asset('frontend-asstets/assets/image/contact/3.svg')}}" alt="">
                                <div class="single-address-content">
                                    <span>Our Email</span>
                                    <p>info@quantum-markets.co.uk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="main-contact text-center position-relative" style="	width: 100%;">
                        <div class="title-light" style="text-align: left;">
                            <h4 style="
                            display: inline-block; padding: 8px 15px; text-transform: uppercase;">
                                <span>Drop</span> US A line
                            </h4>
                        </div>
                        <div class="input-contact">
                            @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif
                            <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input name="name" type="text" placeholder="Enter Name"
                                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-xl-6">
                                        <input name="email" type="text" placeholder="Enter Email"
                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-xl-12">
                                        <input name="subject" type="text" id="" placeholder="Enter Subject"
                                            class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                            value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="message" name="" id="" placeholder="Message"
                                            class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                                            value="{{ old('message') }}" rows="10"></textarea>
                                        @if ($errors->has('message'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="submit-inpute">
                                            <button type="submit">Send </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    @include('user.partials.footer')

</body>

</html>
