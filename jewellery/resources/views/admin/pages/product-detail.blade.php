    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->
        
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Product Detail</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            
                    <!--Order Details Customer Information Start-->
                                @isset($product)
                                @foreach($product as $product_)
                    <div class="row mt-40">
                        <!--Order Details Customer Information Start-->
                        <div class="col-12 mb-30">
                            <div class="order-details-customer-info row mbn-20">

                                <!--Billing Info Start-->
                               
                                <div class="col-lg-5 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">{{$product_->name}}</h4>
                                    @isset($gallery)
                                    @foreach($gallery as $gal)
                                    <h5 class="mb-25">{{$gal->type==='typemain' ? "Main Photo":"Additional Photo(s)" }}</h3>
                                    <img src="{{asset($gal->url)}}" alt="">
                                    @endforeach
                                    @endisset
                                </div>
                                <!--Billing Info End-->
                                <div class="col-lg-1">

                                </div>
                                <!--Shipping Info Start-->
                                <div class="col-lg-6 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">Product Info</h4>
                                    <ul>
                                        <li> <span>Name</span> <span>{{$product_->name}}</span> </li>
                                        <li> <span>Product Code</span> <span>{{$product_->product_code}}</span> </li>
                                        <li> <span>Category</span> <span>{{$product_->category}}</span> </li>
                                        <li> <span>Jewellery</span> <span>{{$product_->jewellery}}</span> </li>
                                        
                                       
                                        <li> <span>Hightlight</span> <span>{{$product_->highlight}}</span> </li>
                                        <li> <span>Price</span> <span>{{$product_->price}}  MMK </span> </li>
                                        <li> <span>Discount </span> <span>{{$product_->discount}} MMK </span> </li>
                                        <li> <span>Instock</span> <span>{{$product_->instock}}</span> </li>
                                        <li> <span>Delivery Fee</span> <span>{{$product_->deli_fee}} MMK </span> </li>
                                        <li> <span>Description</span> <span>{{$product_->description}}</span> </li>

                                        <li> <span>Company</span> <span>{{$product_->company_id}}</span> </li>
                                        <li> <span>Additional Info</span> <span>{{$product_->additional_information}}</span> </li>
                                        
                                        
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