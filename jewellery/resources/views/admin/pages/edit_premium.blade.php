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
                        <h3>Jewelery Site  <span>/ Edit Premium Show</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    @isset($premium)
                    @foreach ($premium as $premi)
                    <form action="{{route ('update_premium')}}"  enctype="multipart/form-data" method="post">

                        @csrf
                        <h4 class="title">About Premium Products</h4>

                        <div class="row">
                            <input type="hidden" name="id" value="{{$premi->id}}">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Name / Title*" name="name" value="{{$premi->name}}" required></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" step="any" placeholder="Product Price*" name="price" value="{{$premi->price}}" required></div>
                            <div class="col-12 mb-30"><textarea class="form-control" placeholder="Product Description*" name="dscrp"  required>{{$premi->description}}</textarea></div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input list="company" class="form-control" name="company_name">
                                <datalist id="company">
                                   @php
                                    $company_name = DB::table('company')->pluck('name');
                                    foreach ($company_name as $cn) {
                                        
                                    @endphp
                                    <option value='{{ $cn }}'></option>
                                    @php                                    
                                    }
                                    @endphp 
                                </datalist>
                                
                                    <!-- <datalist id="company">
                                    
                                    </datalist> -->
                            </div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" placeholder="Instock" name="instock" value="{{$premi->instock}}" required></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Code"  name="code" value="{{$premi->product_code}}" required></div>

                        </div>

                         <h4 class="title">Premium Show Image</h4>

                        <div class="product-upload-gallery row flex-wrap">
                            <img src="{{asset($premi->photo)}}" alt="">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple name="b_img" accept="image/*">
                            </div>
                        </div>
                       

                        <h4 class="title">Additional Information</h4>

                         <div class="row">
                            <div class="col-12 mb-30"><textarea class="form-control" type="text" placeholder="Additional Information" name="info">{{$premi->additional_information}}</textarea></div>
                        </div>

                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit">Update</button>
                                
                                <button class="button button-outline button-danger mb-10 ml-10 mr-0">Cancel</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                    @endforeach
                                @endisset
                </div>

            </div><!-- Add or Edit Product End -->

        </div>
        @endsection