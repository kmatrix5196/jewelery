    @extends('admin.layouts.default')
    @section('title','Jewelery Blog List')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

          <!-- Page Headings Start -->
          <div class="row justify-content-between align-items-center mb-10">

                    
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site <span>/ Blog List</span></h3>
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
                                    <th>Blog Title</th>
                                    <th>Blog Subtitle</th>
                                    <th>Description</th>
                                    <th>Paragraph</th>
                                    <th>Date</th>                
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($temp_blogs)
                                @foreach ($temp_blogs as $temp_blog)
                                <tr>
                                    <td><img src="{{asset($temp_blog['url'])}}" alt="" class="blog-image rounded-circle" style="width: 50px;height: 50px;"></td>
                                    <td>{{$temp_blog['title']}}</td>
                                    
                                    <td>{{$temp_blog['subtitle']}}</td>
                                    <td>{{$temp_blog['description']}}</td>
                                    <td>{{$temp_blog['paragraph']}}</td>
                                    <td>{{$temp_blog['date']}}</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="/admin/blog/view/{{$temp_blog['blog_id']}}"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="/admin/blog/edit/{{$temp_blog['blog_id']}}"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="{{route('delete_blog', $temp_blog['date'])}}"><i class="zmdi zmdi-delete"></i></a>
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