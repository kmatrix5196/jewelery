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
            <div class="add-edit-product-wrap col-12">
                @isset($temp_product)

                <div class="add-edit-product-form">
                    <form action="{{route ('edit_product')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <h4 class="title">About Product</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Name / Title*" name="p_name" value="{{$temp_product['name']}}" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Category*" name="p_category" value="{{$temp_product['category']}}" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" step="any" placeholder="Product Price*" name="p_price" value="{{$temp_product['price']}}" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control"  type="number" min="0" placeholder="Product Discount" name="p_discount" value="{{$temp_product['discount']}}" autocomplete="off"></div>
                            <div class="col-12 mb-30"><textarea class="form-control" placeholder="Product Description*" name="p_dscrp" required autocomplete="off">{{$temp_product['description']}}</textarea></div>
                            @php
                                $company_id=$temp_product['company_id'];
                                $company_name = DB::table('company')->where('id',$company_id)->value('name');
                            @endphp
                            <div class="col-lg-6 col-12 mb-30">
                                <input list="company" class="form-control" name="p_company_name" value="{{$company_name}}" autocomplete="off">
                                 @isset($company)
                                <datalist id="company">

                                    @foreach ($company as $cn) {


                                    <option value="{{ $cn['name'] }}"></option>

                                    @endforeach
                                </datalist>
                                @endisset

                                    <!-- <datalist id="company">

                                    </datalist> -->
                            </div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input class="form-control" type="text" placeholder="Jewellery" name="p_jewellery" list="jewellery" required value="{{$temp_product['jewellery']}}" autocomplete="off">
                                <datalist id="jewellery">
                                    <option value="Diamond"></option>
                                    <option value="Ruby"></option>
                                    <option value="Pearl"></option>
                                    <option value="Jade"></option>
                                    <option value="Sapphires"></option>
                                    <option value="Loose Stone"></option>
                                </datalist>
                            </div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" placeholder="Instock" value="{{$temp_product['instock']}}" name="p_instock" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Code" value="{{$temp_product['product_code']}}" name="p_code" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control" name="p_highlight">
                                    <option value="{{$temp_product['highlight']}}" selected="selected">{{$temp_product['highlight']}}</option>
                                    <option value="Design">Design</option>
                                    <option value="Gems">Gems</option>
                                    <option value="Value">Value</option>
                                    <option value="Limited">Limited</option>
                                    <option value="Small Value">Small Value</option>
                                </select>
                              </div>
                        </div>

                        <h4 class="title">Product Gallery</h4>
                        @isset($gallery1)
                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <img src="{{asset($gallery1->url)}}" alt="">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple name="p_image_typemain" accept="image/*">
                            </div>
                        </div>
                        @endisset
                        @isset($gallery2)
                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <img src="{{asset($gallery2->url)}}" alt="">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple name="p_image_type1" accept="image/*">
                            </div>
                        </div>
                        @endisset
                        @isset($gallery3)
                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <img src="{{asset($gallery3->url)}}" alt="">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple name="p_image_type2" accept="image/*">
                            </div>
                        </div>
                        @endisset
                        <h4 class="title">Additional Information</h4>

                        <!-- <div class="row">
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" placeholder="Information 1"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" placeholder="Information 2"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" placeholder="Information 3"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" placeholder="Information 4"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" placeholder="Information 5"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" placeholder="Information 6"></div>
                        </div> -->
                         <div class="row">
                            <div class="col-12 mb-30"><textarea class="form-control" type="text" placeholder="Additional Information" name="p_add_info">{{$temp_product['additional_information']}}</textarea></div>
                        </div>

                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" value="{{$temp_product['id']}}" name="p_id" type="submit">Save</button>

                                <button class="button button-outline button-danger mb-10 ml-10 mr-0">Cancel</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

                @endisset
            </div><!-- Add or Edit Product End -->

        </div><!-- Content Body End -->
        @endsection
