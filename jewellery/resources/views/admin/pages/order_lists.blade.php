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
                                    <th>Product ID</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>In Stock</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#MSP40022</td>
                                    <td><img src="assets/images/sample/product-sample-60.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Title Product</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-danger">Out of stock</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40023</td>
                                    <td><img src="assets/images/sample/product-sample-60.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Title Product</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Published</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40024</td>
                                  <td><img src="assets/images/sample/product-sample-60.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Title Product</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-danger">Out of stock</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40025</td>
                                    <td><img src="assets/images/sample/product-sample-60.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Title Product</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Published</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40026</td>
                                  <td><img src="assets/images/sample/product-sample-60.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Title Product</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Published</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.php"><i class="zmdi zmdi-more"></i></a>
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