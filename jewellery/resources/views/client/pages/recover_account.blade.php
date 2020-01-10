    @extends('client.layouts.default')
    @section('title','Recover Account')
    @section('content')
    <main>
        <!-- hero slider area start -->
        <section class="slider-area">

                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item bg-img" data-bg="sample/slider-sample.jpg">
                        <div class="container">
                            <div class="row">

                              <div class="col-lg-3">

                              </div>
                              <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap" style="background:inherit;box-shadow:inherit;">
                                <h5 class="recover-account">Recover Your Account</h5>
                                <p class="recover-account">Enter email address to send a recovery email.</p>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter Your Email Address" required="">
                                    </div>


                                    <div class="single-input-item">
                                        <button class="btn btn-recover">submit</button>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->



        </section>
        <!-- hero slider area end -->




    </main>
    @endsection