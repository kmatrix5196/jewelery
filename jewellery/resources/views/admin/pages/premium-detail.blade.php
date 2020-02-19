    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->

        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Premium Item Detail</span></h3>
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
                                    <!-- <ul>
                                        <li> <span>Product Name</span> <span>{{$premi->name}}</span> </li>
                                        <li> <span>Product Code</span> <span>{{$premi->product_code}}</span> </li>
                                        <li> <span>Price</span> <span>{{$premi->price}}</span> </li>
                                        <li> <span>Description</span> <span>{{$premi->description}}</span> </li>
                                        
                                        <li> <span>Additional   Information</span> <span>{{$premi->additional_information}}</span> </li>
                                        <li> <span>Instock</span> <span>{{$premi->instock}}</span> </li>
                                        <li> <span>Company</span> <span>{{$premi->company_id}}</span> </li>
                                        <li> <span>Created Date</span> <span>{{$premi->created_at}}</span> </li>
                                        <li> <span>Last Updated at</span> <span>{{$premi->updated_at}}</span> </li>
                                    </ul> -->
                                    <table class="table">
                                        <tr>
                                            <td style="width: 130px">Product Name</td>
                                            <td style="width: 30px">:</td>
                                            <td>{{$premi->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Product Code</td>
                                            <td>:</td>
                                            <td>{{$premi->product_code}}</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>:</td>
                                            <td>{{$premi->price}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top">Description</td>
                                            <td style="vertical-align: top">:</td>
                                            <td>{{$premi->description}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top">Additional Info</td>
                                            <td style="vertical-align: top">:</td>
                                            <td>{{$premi->additional_information}}</td>
                                        </tr>
                                        <tr>
                                            <td>Instock</td>
                                            <td>:</td>
                                            <td>{{$premi->instock}}</td>
                                        </tr>
                                        <tr>
                                            <td>Company</td>
                                            <td>:</td>
                                            <td>{{$premi->company_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Created Date</td>
                                            <td>:</td>
                                            <td>{{$premi->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Updated at</td>
                                            <td>:</td>
                                            <td>{{$premi->updated_at}}</td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                
                                <!--Shipping Info End-->
                            </div>
                        </div>
                        <!--Order Details Customer Information Start-->
                      </div>
                      <div class="row">
                                    <div class="col-lg-6">
                                        <iframe src="{{asset($premi->certificate)}}" style="width: 450px;height:300px;border:1px solid; "></iframe>
                                    <!-- <img src="{{asset($premi->certificate)}}" alt="">  -->
                                    </div>
                                    <div class="col-lg-6">
                                        <iframe
                                        src="{{'https://www.youtube.com/embed/'.$premi->youtube}}" style="width: 450px;height:300px;border:1px solid; ">
                                        </iframe>
                                    </div>
                                </div>
                      <hr>
                      @endforeach
                                @endisset

            </div>

        </div><!-- Content Body End -->
        @endsection