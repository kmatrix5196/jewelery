    @extends('client.layouts.default')
    @section('title','Supplier')
    @section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">
                                       <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                  width="30" height="30"
                                                                  viewBox="0 0 172 172"
                                                                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                                                                </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Suppliers</li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- compare main wrapper start -->
        <div class="compare-page-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                  <div class="shop-top-bar">
                                <div class="row align-items-center">

                                  <div class="col-lg-1"></div>
                                  <div class="col-lg-4">
                                    <form class="header-search-box d-lg-none d-xl-block animated jackInTheBox">
                                      <input type="text" placeholder="Search For a Company" class="header-search-field">
                                      <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                  </form>
                                  </div>
                                  <div class="col-lg-1"></div>

                                    <div class="col-lg-6 col-md-6 order-2 order-md-1">
                                        <div class="top-bar-left">

                                            <div class="product-amount">
                                              <div class="product-tab-menu">
                                                <ul class="nav justify-content-center">
                                                    Filtered By : &nbsp;&nbsp;&nbsp;
                                                                  &nbsp;&nbsp;&nbsp;
                                                    <li><a href="#tab1" class="" data-toggle="tab">Rating</a></li>
                                                    <li><a href="#tab2" data-toggle="tab" class="show">Capacity</a></li>
                                                    <li><a href="#tab3" data-toggle="tab" class="show">Transation</a></li>
                                                    <li><a href="#tab4" data-toggle="tab" class="show">Product Type</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>                   
                    <br>
                    <br>
                    
                    <!-- start company row -->
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-thumb"><br><br><br>
                                <a href="company_profile">
                                    <img src="{{asset('img/images.jpeg')}}" alt="about thumb">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">                    
                        <div class="col-lg-6">
                            <!-- Compare Page Content Start -->
                            <div class="compare-page-content-wrap">
                                <div class="compare-table table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>

                                            <tr>
                                                <td class="first-column HEX Creative-font">Business Type</td>
                                                <td class="first-column">
                                                    Trading Company
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Main Product</td>
                                                <td class="pro-price">Lorem ipsum dolor sit amet, consectete velit esse cillum dolore eu fugiat

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Total Annual Revenue</td>
                                                <td class="pro-color">US $1O Million - US $50 Million</td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Certificaions</td>
                                                <td class="pro-stock"> - </td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Patents</td>
                                                  <td class="pro-stock"> - </td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Main Markets</td>
                                                <td class="pro-stock">
                                                  Asia 15.00%<br>
                                                  China 15.00%<br>
                                                  Myanmar 12.00%
                                                </td>

                                            </tr>

                                        </tbody>
                                        
                                    </table>

                                    
                                </div>
                            </div>
                            <!-- Compare Page Content End -->
                        </div>

                        <div class="col-lg-6">
                            <!-- Compare Page Content Start -->
                            <div class="compare-page-content-wrap">
                                <div class="compare-table table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>

                                            <tr>
                                                <td class="first-column HEX Creative-font">Location</td>
                                                <td class="first-column">
                                                    Trading Company
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Total Employee</td>
                                                <td class="pro-price">Lorem ipsum dolor sit amet, consectete velit esse cillum dolore eu fugiat

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Year Estsblished</td>
                                                <td class="pro-color">2002</td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Product Certificaions(1)</td>
                                                <td class="pro-stock"> CE </td>

                                            </tr>
                                            <tr>
                                                <td class="first-column HEX Creative-font">Trademarks</td>
                                                  <td class="pro-stock"> - </td>

                                            </tr>
                                      </tbody>
                                    </table>
                                    
                                </div>
                                <br><br>
                                <div class="row">
                                    <ul class=" list-inline">
                                        <li class="list-inline-item">
                                            <a href="supplier_company"><button class="btn btn-zg1">Start Order</button></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="chat"> <button class="btn btn-zg2">Chat Now</button></a>
                                        </li>
                                    </ul>
                                    
                                    
                                    
                                </div>
                            </div>
                            <!-- Compare Page Content End -->
                        </div>

                    
                    </div>
                    
                    <!-- end row -->

           

                   
                </div>
            </div>
        </div>
        <!-- compare main wrapper end -->

       
    </main>
    @endsection