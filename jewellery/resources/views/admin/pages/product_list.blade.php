    @extends('admin.layouts.default')
    @section('title','Jewelery Site Dashboard')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

          <!-- Page Headings Start -->
          <div class="row justify-content-between align-items-center mb-10">

                    
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Product List</span></h3>
                    </div>
                </div>


          </div><!-- Page Headings End -->

            <div class="row">

                <!--Order List Start-->
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
                                    <td><img src="{{asset('images/sample/product-sample-60.jpg')}}" alt="" class="product-image rounded-circle"></td>
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
                                <tr>
                                    <td><img src="{{asset('images/sample/product-sample-60.jpg')}}" alt="" class="product-image rounded-circle"></td>
                                    <td>#MSP40023</td>
                                    <td>Blanka Mokroš</td>

                                    <td><a href="#">Jewelry Title 2</a></td>
                                    <td>$600.00</td>
                                    <td>03 pyc</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="product-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('images/sample/product-sample-60.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td>#MSP40024</td>
                                    <td>Rostás Linda</td>

                                    <td><a href="#">Jewelry Title 3</a></td>
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
                                <tr>
                                    <td><img src="{{asset('images/sample/product-sample-60.jpg')}}" alt="" class="product-image rounded-circle"></td>
                                    <td>#MSP40025</td>
                                    <td>Jana Valenta</td>

                                    <td><a href="#">Jewelry Title 4</a></td>
                                    <td>$600.00</td>
                                    <td>03 pyc</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="product-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('images/sample/product-sample-60.jpg')}}" alt="" class="product-image rounded-circle"></td>
                                    <td>#MSP40026</td>
                                    <td>Tiêu Bích</td>

                                    <td><a href="#">Jewelry Title 5</a></td>
                                    <td>$600.00</td>
                                    <td>03 pyc</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Paid</span></td>
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
                <!--Order List End-->

            </div>

        </div><!-- Content Body End -->
        @endsection