<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Quantam | FAQ</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

     <!--top FAQ-slider start-->
     <section class="slider-area">
          <div class="sliders">
              <div class="single-slider-faq bg-overlay bg-overlay:before" style="background-image: url({{asset('frontend-asstets/assets/image/FAQ/2.png')}});">
                  <!--top slider animation end-->
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="top-slider-faq-content">
                                  <h1>Here to help!</h1>
                                  <p>You have questions, we have answers.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--top FAQ-slider end-->
      <!----------------------------------------top area end---------------------------------------->
      
      <main class="main-area bgcolor pt-100 pb-100">
          <div class="container">
              <div class="row">
                @foreach ($faq as $key => $row)
                <div class="col-xl-6 col-md-12">
                    <!--FAQ box start-->
                    <div class="faq-single-main">
                        <a data-bs-target="#a-{{$key}}" data-bs-toggle="collapse">
                            <div class="faq-box" data-aos="fade-right" data-aos-duration="1000">
                                <i class="fas fa-plus"></i>
                                <span> {{$row->question}}</span>
                            </div>
                        </a>
                        <div class="collapse" id="a-{{$key}}">
                            <div class="ans-all">
                                <p>
                                    {{$row->answer}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--FAQ box end-->
                </div>
                @endforeach  
                  
                 
                  <div class="col-xl-12">
                    <div class="faq-content">
                        <p>What if I can't find the answer to my question here? Drop us your question <a href="{{route('contact.index')}}">here.</a></p>
                    </div>
                  </div>
                  
              </div>
          </div>
      </main>
    @include('user.partials.footer')

</body>

</html>