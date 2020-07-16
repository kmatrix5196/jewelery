    @extends('admin.layouts.default')
    @section('title','Admin')
    @section('content')
  
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Order Lists </span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                <!--Manage Product List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    
                                    <th>Order ID</th>
                                    <th>Payment Method</th>
                                    <th>Payment Photo</th>
                                    <th>Total</th>
                                    <th>Shipping Address</th>
                                    <th>Ordered Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($orders)
                                @foreach($orders as $order)
                                <tr>
                                   <td>
                                       {{$order->order_id}}
                                   </td>
                                   <td>
                                       {{$order->payment_method}}
                                   </td>
                                   <td>
                                       <img src="{{asset($order->payment_photo)}}" alt="" class="product-image rounded-circle" style="width: 50px;height: 50px;">
                                   </td>
                                   <td>1000 Kyats</td>
                                   <td>Hlaing,Yangon</td>
                                   <td>
                                       {{$order->order_date}}
                                   </td>
                                   <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="/admin/product/view/{{$order['order_id']}}"><i class="zmdi zmdi-more"></i></a>
                                        
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_product', $order['order_id'])}}"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Manage Product List End-->

            </div>

        </div><!-- Content Body End -->
        @endsection