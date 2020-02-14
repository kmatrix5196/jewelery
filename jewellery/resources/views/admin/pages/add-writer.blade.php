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
                        <h3>Jewelery Site  <span>/ Add Writer</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form action="{{route ('add_writer')}}"  enctype="multipart/form-data" method="post">
                        @csrf
                        <h4 class="title">About Writer</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Name*" name="name" required></div>
                            
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="email" min="0" step="any" placeholder="Email*" name="email" required></div>
                             
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="password" placeholder="Password*"  name="password" required></div>
                           
                          
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="password" placeholder="Retyped Password*"  name="" required></div>
                        </div>

                         
                       
                       


                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit">Save</button>
                                
                                <button class="button button-outline button-danger mb-10 ml-10 mr-0">Cancel</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

            </div><!-- Add or Edit Product End -->

        </div>
        @endsection