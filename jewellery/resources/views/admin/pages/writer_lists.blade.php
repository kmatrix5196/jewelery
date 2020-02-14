    @extends('admin.layouts.default')
    @section('title','Jewelery Blog List')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

          <!-- Page Headings Start -->
          <div class="row justify-content-between align-items-center mb-10">

                    
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Writer List</span></h3>
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
                                   
                                    <th>Name</th> 
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Updated At</th> 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($writers)
                                @foreach ($writers as $writer)
                                <tr>
                                   
                                  <td>{{$writer->name}}</td>
                                    <td>{{$writer->email}}</td>
                                   <td>{{$writer->created_at}}</td>
                                   <td>{{$writer->updated_at}}</td>
                                    <td>
                                        <div class="table-action-buttons">
                                          
                                            <a class="edit button button-box button-xs button-info" href="/admin/writer/edit/{{$writer->id}}"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_writer', $writer->id)}}"><i class="zmdi zmdi-delete"></i></a>
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