    @extends('admin.layouts.default')
    @section('content')
    
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Jewelery Site  <span>/ Add Product</span></h3>
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

                <div class="add-edit-product-form">
                    <form action="{{route ('add_product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4 class="title">About Product</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Name / Title*" name="p_name" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input class="form-control" type="text" placeholder="Category*" name="p_category" list="category" required autocomplete="off">
                                <datalist id="category">
                                    <option value="Necklaces"></option>
                                    <option value="Pendants"></option>
                                    <option value="Barcelets"></option>
                                    <option value="Earrings"></option>
                                    <option value="Rings"></option>
                                    
                                </datalist>
                            </div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" step="any" placeholder="Product Price*" name="p_price" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" placeholder="Product Discount" name="p_discount" autocomplete="off"></div>
                            <div class="col-12 mb-30"><textarea class="form-control" placeholder="Product Description*" name="p_dscrp" required autocomplete="off"></textarea></div>
                            <div class="col-lg-6 col-12 mb-30">
                                <input list="company" class="form-control" name="p_company_name" placeholder="Company*" autocomplete="off" required autocomplete="off">
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
                                <input class="form-control" type="text" placeholder="Jewellery*" name="p_jewellery" list="jewellery" required autocomplete="off">
                                <datalist id="jewellery">
                                    <option value="Diamond"></option>
                                    <option value="Ruby"></option>
                                    <option value="Pearl"></option>
                                    <option value="Jade"></option>
                                    <option value="Sapphires"></option>
                                    <option value="Loose Stone"></option>
                                </datalist>
                            </div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number" min="0" placeholder="Instock*" name="p_instock" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Code*"  name="p_code" required autocomplete="off"></div>
                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control" name="p_highlight">
                                    <option value="Design">Design</option>
                                    <option value="Gems">Gems</option>
                                    <option value="Value">Value</option>
                                    <option value="Limited">Limited</option>
                                    <option value="Small Value">Small Value</option>
                                </select>
                              </div>

                        </div>

                        <h4 class="title">Product Gallery</h4>

                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-6 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <p class="form-help-text mt-0" style="font-weight: bold">Main Picture</p>                                
                                <input class="file-pond" type="file" multiple name="p_image_typemain" accept="image/*" required>
                            </div>
                            <div class="col-6 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <p class="form-help-text mt-0" style="font-weight: bold">Other Picture</p>
                                <input class="file-pond" type="file" multiple name="p_image_type1" accept="image/*" required>
                            </div>
                            <div class="col-6 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <p class="form-help-text mt-0" style="font-weight: bold">Other Picture</p>
                                <input class="file-pond" type="file" multiple name="p_image_type2" accept="image/*" required>

                            </div>
                        </div>

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
                            <div class="col-12 mb-30"><textarea class="form-control" type="text" placeholder="Additional Information" name="p_add_info"></textarea></div>
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