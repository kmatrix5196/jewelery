    @extends('admin.layouts.default')
    @section('title','Jewelery Blog List')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

          <!-- Page Headings Start -->
          <div class="row justify-content-between align-items-center mb-10">

                    
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Premium Show List</span></h3>
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
                                   
                                    <th>Product Code</th> 
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Instock</th>
                                    <th>Company</th>
                                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($premium)
                                @foreach ($premium as $premi)
                                <tr>
                                   
                                  <td>{{$premi->product_code}}</td>
                                    <td>{{$premi->name}}</td>
                                    <td>{{$premi->price}}</td>
                                    <td>{{$premi->description}}</td>
                                    <td>{{$premi->instock}}</td>
                                    <td>{{$premi->company_id}}</td>
                                   
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="/admin/premium/detail/{{$premi->id}}"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="/admin/premium/edit/{{$premi->id}}"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_premium', $premi->id)}}"><i class="zmdi zmdi-delete"></i></a>
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