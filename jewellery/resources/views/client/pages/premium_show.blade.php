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
                                  @auth('user')
                                  <div class="button-group">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Message" onclick="createCon({{$premi->id}},{{$premi->company_id}})"><i class="pe-7s-chat"></i></a>
                                  </div>
                                  @endauth
                                  

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
      @auth('user')
        <form action="{{route('user.createconpre')}}" id="createconpre" method="post">
            @csrf
            <input type="" name="u_id" id="u_id">
            <input type="" name="c_id" id="c_id">
            <input type="" name="p_id" id="p_id">
        </form>
        @endauth
    </main>
    @auth('user')
    <script type="text/javascript">
        document.getElementById('createconpre').style.display = "None";
      
        function createCon(p_id,c_id) {
            document.getElementById('p_id').value = p_id;
            document.getElementById('c_id').value = c_id;
            document.getElementById('u_id').value = {{Auth::guard('user')->user()->id}};
            document.getElementById('createconpre').submit();
        }
    </script>
    @endauth
    @endsection