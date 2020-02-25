    @extends('client.layouts.default')
    @section('title','Premium Show')
    @section('content')
    <main>
      <!-- featured product area start -->
      <section class="feature-product section-padding" style="padding-bottom:140px;">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <!-- section title start -->
                      <div class="section-title text-center">
                        <h2 class="title bowly-font"><span class="lgo-clr">Premium</span> Show</h2>
                        <p class="sub-title">Add featured products to weekly lineup</p>
                      </div>
                      <!-- section title start -->
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                       
                          <!-- product item start -->
                          @isset($premium)
                    @foreach ($premium as $premi)
                          <div class="product-item">
                              <figure class="product-thumb">
                                  <a href="\home\premium_show\detail\{{$premi->id}}">
                                      <img class="pri-img" src="{{$premi->photo}}" alt="product">
                                      
                                  </a>
                                  <div class="product-badge">


                                  </div>
                                  <div class="button-group">
                                    <a href="chat\{{$premi->id}}" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
                                  </div>

                              </figure>
                          </div>
                          @endforeach
                                @endisset
                          <!-- product item end -->

                          
                          
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- featured product area end -->
    </main>
    @endsection