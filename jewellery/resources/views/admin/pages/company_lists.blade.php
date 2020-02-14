    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->
        
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Company Lists</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            
                    <!--Order Details Customer Information Start-->
                                @isset($companies)
                                @foreach ($companies as $company)
                    <div class="row mt-40">
                        <!--Order Details Customer Information Start-->
                        <div class="col-12 mb-30">
                            <div class="order-details-customer-info row mbn-20">

                                <!--Billing Info Start-->
                               
                                <div class="col-lg-5 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">{{$company->name}}</h4>
                                    <img src="{{asset($company->profile_pic)}}" alt="">
                                </div>
                                <!--Billing Info End-->
                                <div class="col-lg-1">

                                </div>
                                <!--Shipping Info Start-->
                                <div class="col-lg-6 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">Company Info</h4>
                                    <ul>
                                        <li> <span>Company Name</span> <span>{{$company->name}}</span> </li>
                                        <li> <span>Business Type</span> <span>{{$company->business_type}}</span> </li>
                                        <li> <span>Main Products</span> <span>{{$company->main_product}}</span> </li>
                                        
                                        <li> <span>Location</span> <span>{{$company->location}}</span> </li>
                                        <div  id="map" style="width: 300px;height: 200px">
                                            </div>
                                        <li> <span>Year Estsblished</span> <span>{{$company->year_established}}</span> </li>
                                        <li> <span>Email</span> <span>{{$company->email}}</span> </li>
                                        <li> <span>Tel </span> <span>{{$company->phone}}</span> </li>
                                        <li> <span>Email Verification</span> <span>{{$company->email_verified_at===null ? "Not Verified":"Verified" }}</span> </li>
                                        <li> <span>Created Date</span> <span>{{$company->created_at}}</span> </li>
                                        <li> <span>Last Updated at</span> <span>{{$company->updated_at}}</span> </li>
                                    </ul>
                                
                                
                                </div>
                                <!--Shipping Info End-->
                            </div>
                        </div>
                        <!--Order Details Customer Information Start-->
                      </div><hr>
                     
                      <script type="text/javascript">
                        var map; //Will contain map object.
                        
                       function initMap() {
                          // The location of Uluru
                          var lat={!! $company->lat !!};

                          var lng= {!! $company->lng !!};
                          var uluru = {lat: lat, lng: lng};
                          // The map, centered at Uluru
                          var map = new google.maps.Map(
                              document.getElementById('map'), {zoom: 18, center: uluru});
                          // The marker, positioned at Uluru
                          var marker = new google.maps.Marker({position: uluru, map: map});
                        }
                      </script>
                      </script>
                        <!--Load the API from the specified URL
                        * The async attribute allows the browser to render the page while the API loads
                        * The key parameter will contain your own API key (which is not needed for this tutorial)
                        * The callback parameter executes the initMap() function
                        -->
                        <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ1_vh_j49oUHy3T2o4N6R8FJH-zzTvu0&callback=initMap">
                        </script>
                      @endforeach
                @endisset

            </div>

        </div><!-- Content Body End -->

        @endsection