    @extends('admin.layouts.default')
    @section('content')
        <!-- Content Body Start -->
        
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Company Lists</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            
                    <!--Order Details Customer Information Start-->
                                
                   <div class="row">

                <!--Order List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                   
                                    
                                    <th>Company Name</th>
                                    <th>Business Type</th>
                                    <th>Main Product</th>
                                    <th>Location</th>
                                    <th>Year Established</th>
                                    <th>Email</th>         
                                    <th>Tel</th>
                                    <TH>Action</TH>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($companies)
                                @foreach ($companies as $company)
                                <tr>
                                   
                                  <td>{{$company->name}}</td>
                                    <td>{{$company->business_type}}</td>
                                    <td>{{$company->main_product}}</td>
                                    <td>{{$company->location}}</td>
                                    <td>{{$company->year_established}}</td>
                                    <td>{{$company->email}}</td>
                                    <td>{{$company->phone}}</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="/admin/company_detail/{{$company->id}}"><i class="zmdi zmdi-more"></i></a>
                                            <!-- <a class="edit button button-box button-xs button-info" href="/admin/company_edit/{{$company->id}}"><i class="zmdi zmdi-edit"></i></a> -->
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_company', $company->id)}}"><i class="zmdi zmdi-delete"></i></a>
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

            </div>

        </div><!-- Content Body End -->

        @endsection