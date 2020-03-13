    @extends('admin.layouts.default')
    @section('title','Jewelery Site Dashboard')
    @section('content')
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site  <span>/ Profile Details</span></h3>
                    </div>
                </div><!-- Page Heading End -->

               

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                @isset($admin)
                @foreach($admin as $ad)
                <table class="table">
                  <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{$ad->name}}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$ad->email}}</td>
                  </tr>
                  <tr>
                    <td>
                      Password
                    </td>
                    <td>:</td>
                    <td>
                      ******** 

                    </td>
                  </tr>
                  <tr>
                    <td>
                      
                    </td>
                    <td></td>
                    <td>
                      <form action="" method="post">
                        <input type="submit" name="" class="btn btn-primary" value="Update">
                      </form>
                  </tr>
                </table>
                @endforeach
                @endisset
                </div>

            </div><!-- Add or Edit Product End -->

        </div><!-- Content Body End -->
  @endsection