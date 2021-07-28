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
                        <span>Research</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                 <div class="col-xl-8">
                    <div class="single-blogshow-box bgcolor main-blog mt-0 mb-20" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="blog-img">
                            @if($blog->blogimageName=='default.jpg')
                            <img  src="{{asset('image/default.jpg')}}">
                            @else
                            <img  src="{{asset('uploads/Blog/'.$blog->blogimageName)}}"  alt="">
                        @endif
                        </div>
                        <div class="blog-details">
                            <h4> {{$blog->blog_title}}</h4>
                            <p>{{$blog->blog_description}}</p>
                            <div class="research-details-bottom">
                                <a href="{{URL::previous()}}">
                                    <div class="mian-blog-back">
                                         <span>Back</span>
                                     </div>
                                    </a>
                                    <div class="blog-date">
                                        <span> <i class="far fa-clock"></i> {{$blog->created_at->diffForHumans()}}</span>
                                    </div>
                            </div>
                           
                            
                        </div>
                     </div>
                 </div>
                 <div class="col-xl-4">
                     <div class="Recent-Post">
                         <div class="col-xl-12">
                             <div class="title-Recent-Post">
                                <h4>Recent Post</h4>
                             </div>
                         </div>
                         <div class="col-xl-12">
                            @foreach(App\Blog::latest()->limit(5)->get() as $row)
                            <div class=" single-recent-post" data-aos="flip-up" data-aos-duration="1000">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="recent-post-image">
                                            @if($row->blogimageName=='default.jpg')
                                            <img  src="{{asset('image/default.jpg')}}">
                                            @else
                                            <img  src="{{asset('uploads/Blog/'.$row->blogimageName)}}"  alt="">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="recent-post-name">
                                            <a href="{{action('BlogController@blogshow',['id' => $row->id])}}">
                                                <h6>{{str_limit($row->blog_title,60)}} </h6>
                                            </a>
                                            <a href="{{action('BlogController@blogshow',['id' => $row->id])}}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach  
                            
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </main>
    @include('user.partials.footer')

</body>

</html>