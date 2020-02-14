    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->

        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ User Detail</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            
                    <!--Order Details Customer Information Start-->
                                @isset($users)
                                @foreach($users as $user)
                    <div class="row mt-40">
                        <!--Order Details Customer Information Start-->
                        <div class="col-12 mb-30">
                            <div class="order-details-customer-info row mbn-20">

                                <!--Billing Info Start-->
                               
                                <div class="col-lg-5 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">{{$user->first_name." ".$user->last_name}}</h4>
                                    <img src="{{asset($user->profile_pic)}}" alt="">
                                </div>
                                <!--Billing Info End-->
                                <div class="col-lg-1">

                                </div>
                                <!--Shipping Info Start-->
                                <div class="col-lg-6 col-md-6 col-12 mb-20">
                                    <h4 class="mb-25">User Info</h4>
                            
                                    <table>
                                        <tr>
                                            <td style="width: 130px">First Name</td>
                                            <td style="width: 30px">:</td>
                                            <td>{{$user->first_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td>:</td>
                                            <td>{{$user->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top">Phone</td>
                                            <td style="vertical-align: top">:</td>
                                            <td>{{$user->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top">Address</td>
                                            <td style="vertical-align: top">:</td>
                                            <td>{{$user->address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Verified</td>
                                            <td>:</td>
                                            <td>{{$user->email_verified_at===null ? "Not Verified":"Verified" }}</td>
                                        </tr>
                                        <tr>
                                            <td>Created Date</td>
                                            <td>:</td>
                                            <td>{{$user->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Updated at</td>
                                            <td>:</td>
                                            <td>{{$user->updated_at}}</td>
                                        </tr>
                                    </table>
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