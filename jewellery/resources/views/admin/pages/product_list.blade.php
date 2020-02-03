    @extends('admin.layouts.default')
    @section('title','Jewelery Product List')
    @section('content')
    use Illuminate\Support\Facades\DB;
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
                                    <th>Product ID</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Company Name</th>
                                    <th>Price</th>
                                    
                                    <th>In Stock</th>
                                    <th>Date</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($temp_products)
                                @foreach ($temp_products as $temp_product)
                                @php
                                $company_id=$temp_product['company_id'];
                                $company_name = DB::table('company')->where('id',$company_id)->value('name');
                                @endphp
                                <tr>
                                    <td>{{$temp_product['id']}}</td>
                                    <td><img src="{{asset($temp_product['thumbnail'])}}" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">{{$temp_product['name']}}</a></td>
                                    <td><a href="#">{{$company_name}}</a></td>
                                    <td>${{number_format($temp_product['price'],2)}}</td>
                                    
                                    <td>{{$temp_product['instock']}}</td>
                                    <td>{{$temp_product['created_at']->format('d M Y')}}</td>
                                    <td><span class="badge badge-danger">{{$temp_product['status']}}</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.php"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="/admin/product/edit/{{$temp_product['id']}}"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_product', $temp_product['id'])}}"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Order List End-->

            </div>

        </div><!-- Content Body End -->
        @endsection