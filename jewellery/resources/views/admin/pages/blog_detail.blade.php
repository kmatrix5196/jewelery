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
                                @isset($blog)
                                @foreach ($blog as $bg)
                    <div class="row mt-40">
                        <!--Order Details Customer Information Start-->
                        <div class="col-12 mb-30">
                            <div class="order-details-customer-info row mbn-20">

                                <!--Billing Info Start-->
                               
                                <div class="col-lg-5 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">{{$bg->title}}</h4>
                                    @isset($blog_images)
                                    @foreach($blog_images as $blog_image)
                                    <img src="{{asset($blog_image->url)}}" alt="">
                                    @endforeach
                                    @endisset
                                </div>
                                <!--Billing Info End-->
                                <div class="col-lg-1">

                                </div>
                                <!--Shipping Info Start-->
                                <div class="col-lg-6 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">Blog Detail</h4>
                                   
                                    <table class="table">
                                        <tr>
                                            <td style="width: 130px">Title</td>
                                            <td style="width: 30px">:</td>
                                            <td>{{$bg->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Subtitle</td>
                                            <td>:</td>
                                            <td>{{$bg->subtitle}}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>:</td>
                                            <td>{{$bg->description}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top">Date</td>
                                            <td style="vertical-align: top">:</td>
                                            <td>{{$bg->date}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top">Paragraph</td>
                                            <td style="vertical-align: top">:</td>
                                            <td>{{$bg->paragraph}}</td>
                                        </tr>
                                        
                                        
                                    </table>
                                </div>
                                
                                <!--Shipping Info End-->
                            </div>
                        </div>
                        <!--Order Details Customer Information Start-->
                      </div>
                     
                      <hr>
                      @endforeach
                                @endisset

            </div>

        </div><!-- Content Body End -->
        @endsection