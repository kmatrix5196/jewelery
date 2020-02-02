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
                        <h3>eCommerce <span>/ Order Lists </span></h3>
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
                                    <th>Image</th>
                                    <th>Order ID</th>
                                    <th>Customer</th>

                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quentity</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{asset('/img/images/sample/product-sample-60.jpg')}}" alt="" class="product-image rounded-circle"></td>
                                    <td>#MSP40022</td>
                                    <td>Sean Oliver</td>

                                    <td><a href="#">Jewelry Title 1</a></td>
                                    <td>$600.00</td>
                                    <td>03 pyc</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-danger">Due</span></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="product-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Manage Product List End-->

            </div>

        </div><!-- Content Body End -->
        @endsection