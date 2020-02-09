    @extends('client.layouts.default')
    @section('title','Trade Show')
    @section('content')

    <main>
        
        <!-- about us area start -->
        <section class="about-us section-padding pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-thumb"><br><br><br>
                            <img src="{{asset('img/sample/blog-sample.jpg')}}" alt="about thumb">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content">
                            <h3 class="about-title bowly-font" style="color:#c29958;">Trade Show</h3>
                            <h5 class="about-sub-title">
                                Founded in 1986, I.D. Jewelry, LLC, a family owned & operated business has become a house-hold name in states all over the USA as well as countries all over the world.
                            </h5>
                            <p>For those that rather the full immersion of the in store experience we welcome your company and look forward to meeting you face to face. Being located in the 47 street diamond district, known to be the largest diamond.</p>
                            <p>Based in the heart of New York’s Diamond District, also known as the NYC diamond district, I. D. Jewelry has some of the most competitively priced in the market. It is our goal to supply our clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br>
        <!-- about us area end -->
        



        <!-- latest blog area start -->
        <section class="latest-blog-area section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title bowly-font">latest blogs</h2>
                            <p class="sub-title">There are latest blog posts</p>
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                            @isset($temp_blogs)
                            @foreach ($temp_blogs as $temp_blog)
                            <!-- blog post item start -->
                            <div class="blog-post-item">
                                <figure class="blog-thumb">
                                    <a href="blog-details">
                                        <img src="{{asset($temp_blog['url'])}}" alt="blog image')}}">
                                    </a>
                                </figure>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p>{{$temp_blog['date']}} | <a href="{{route('blog_detail', $temp_blog['blog_id'])}}"></a></p>
                                    </div>
                                    <h5 class="blog-title">
                                        <a href="{{route('blog_detail', $temp_blog['blog_id'])}}">{{$temp_blog['description']}}</a>
                                    </h5>
                                </div>
                            </div>
                            <!-- blog post item end -->
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest blog area end -->

    </main>
    @endsection