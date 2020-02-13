    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Premium Show Lists</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            
                    <!--Order Details Customer Information Start-->
                                @isset($premium)
                                @foreach ($premium as $premi)
                    <div class="row mt-40">
                        <!--Order Details Customer Information Start-->
                        <div class="col-12 mb-30">
                            <div class="order-details-customer-info row mbn-20">

                                <!--Billing Info Start-->
                               
                                <div class="col-lg-5 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">{{$premi->name}}</h4>
                                    <img src="{{asset($premi->photo)}}" alt="">
                                </div>
                                <!--Billing Info End-->
                                <div class="col-lg-1">

                                </div>
                                <!--Shipping Info Start-->
                                <div class="col-lg-6 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">Premium Product Info</h4>
                                    <ul>
                                        <li> <span>Product Name</span> <span>{{$premi->name}}</span> </li>
                                        <li> <span>Product Code</span> <span>{{$premi->product_code}}</span> </li>
                                        <li> <span>Price</span> <span>{{$premi->price}}</span> </li>
                                        <li> <span>Description</span> <span>{{$premi->description}}</span> </li>
                                        
                                        <li> <span>Information</span> <span>{{$premi->additional_information}}</span> </li>
                                        <li> <span>Instock</span> <span>{{$premi->instock}}</span> </li>
                                        <li> <span>Company</span> <span>{{$premi->company_id}}</span> </li>
                                        <li> <span>Created Date</span> <span>{{$premi->created_at}}</span> </li>
                                        <li> <span>Last Updated at</span> <span>{{$premi->updated_at}}</span> </li>
                                    </ul>
                                </div>
                                <!--Shipping Info End-->
                            </div>
                        </div>
                        <!--Order Details Customer Information Start-->
                      </div><hr>
                      @endforeach
                                @endisset

            </div>

        </div><!-- Content Body End -->
        @endsection