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
                        <h3>Jewellery <span>/ Users List </span></h3>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Email Verified</th>
                               
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($users)
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->email_verified_at===null ? "Not Verified":"Verified" }}</td>
                                    
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="/admin/user_lists/view/{{$user->id}}"><i class="zmdi zmdi-more"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_user', $user->id)}}"><i class="zmdi zmdi-delete"></i></a>
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