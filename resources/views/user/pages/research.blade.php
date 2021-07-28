<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Quantam | Research</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <main class="main-area graybg text-center pt-200 pb-100">
        <div class="container">
            <div class="row">
                <div class="title-light mb-50">
                    <h2 style="
                    display: inline-block; padding: 8px 15px; text-transform: uppercase;">
                        <span>BLOG </span> POSTS
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach (App\Blog::latest()->limit(5)->get() as $row)
                <!--single-blog-box-area-start-->
                <div class="col-xl-12">
                    <div class="single-blog-box bgcolor mt-0 mb-20" data-aos="zoom-in" data-aos-duration="1000">
                        
                        <div class="row ">
                            <div class="col-xl-4 ">
                                <div class="research-img">
                                    @if($row->blogimageName=='default.jpg')
                                        <img  src="{{asset('image/default.jpg')}}">
                                        @else
                                        <img  src="{{asset('uploads/Blog/'.$row->blogimageName)}}"  alt="">
                                    @endif
                                    <div class="mian-blog-status">
                                        <span>NEWS</span>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-xl-8">
                                <div class="research-details">
                                    <a href="{{action('BlogController@blogshow',['id' => $row->id])}}">
                                        <h4> {{str_limit($row->blog_title,60)}}</h4>
                                    </a>
                                    <p>{{str_limit($row->blog_description,170)}}</p>
                                    <div class="research-details-bottom">
                                        <a href="{{action('BlogController@blogshow',['id' => $row->id])}}"><button>Read More</button></a>
                                        <div class="blog-date">
                                            <span><i class="far fa-clock"></i> {{$row->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <!--single-blog-box-area-start-->
                @endforeach  
            </div>
            {{$blog->links()}}
        </div>
    </main>
    @include('user.partials.footer')

</body>

</html>