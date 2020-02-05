    @extends('admin.layouts.default')
    @section('content')
    use Illuminate\Support\Facades\DB;
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site  <span>/ Edit Product</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Save</button>
                        
                        <button class="button button-outline button-danger">Cancel</button>
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-blog-wrap col-12">
                @isset($temp_blog)
                <div class="add-edit-blog-form">
                    <form action="{{route ('edit_blog')}}" method="post">
                        @csrf
                        <h4 class="title">Blog Image</h4>

                        <div class="blog-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple name="b_img" accept="image/*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder=" Title*" name="b_title" value="{{$temp_blog['title']}}" required></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Blog Sub-title*" name="b_subtitle" value="{{$temp_blog['subtitle']}}" required></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Description*"  name="b_dscrp" value="{{$temp_blog['description']}}"  required></div>
                            <div class="col-lg-6 col-12 mb-30"><input type="text" class="form-control input-date-single" value="
                            {{date('d/m/Y', strtotime($temp_blog['date']))}}" name="b_date" required><span class="form-help-text">Date : e.g "12/02/2013"</span></div>
                            <div class="col-12 mb-30"><textarea class="form-control" placeholder="Paragraph*" name="b_paragraph" required>{{$temp_blog['paragraph']}}</textarea></div>
                          

                        </div>


                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" value="{{$temp_blog['id']}}" name="b_id" type="submit">Save & Publish</button>
                               
                                <button class="button button-outline button-danger mb-10 ml-10 mr-0">Cancel</button>
                            </div>
                        </div><!-- Button Group End -->
                    </form>
                </div>
                @endisset

            </div><!-- Add or Edit Product End -->

        </div><!-- Content Body End -->
        @endsection