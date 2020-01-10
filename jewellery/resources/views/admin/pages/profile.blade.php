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

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Save & Publish</button>
                        <button class="button button-outline button-info">Save to Draft</button>
                    
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form action="#">



                        <h4 class="title">Your Photo</h4>

                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Name ( Your Name )"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Company"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Your Phone"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Email Address"></div>
                            <div class="col-12 mb-30"><textarea class="form-control" placeholder="Personal Info"></textarea></div>


                        </div>



                        <div class="row mbn-30">

                  <!--Default Form Start-->
                  <div class="col-lg-6 col-12 mb-30">
                      <div class="box">
                          <div class="box-head">
                              <h4 class="title">Change Password</h4>
                          </div>
                          <div class="box-body">
                              <form>
                                  <div class="row mbn-20">

                                      <div class="col-12 mb-20">
                                          <label for="formLayoutUsername1">Current Password</label>
                                          <input type="text" id="formLayoutUsername1" class="form-control" placeholder="Current Password">
                                      </div>
                                      <div class="col-12 mb-20">
                                          <label for="formLayoutEmail1">New Password</label>
                                          <input type="email" id="formLayoutEmail1" class="form-control" placeholder="New Password">
                                      </div>
                                      <div class="col-12 mb-20">
                                          <label for="formLayoutConfirmPassword1">Confirm New Password</label>
                                          <input type="password" id="formLayoutConfirmPassword1" class="form-control" placeholder="Confirm New Password">
                                      </div>

                                      <div class="col-12 mb-20"><label class="adomx-checkbox"><input type="checkbox"><i class="icon"></i>Remember me</label></div>

                                      <div class="col-12 mb-20">
                                          <input type="submit" value="Save" class="button button-primary">
                                          <input type="submit" value="Cancel" class="button button-danger">
                                      </div>

                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <!--Default Form End-->

                  <!--Horizontal Form Start-->
                  <div class="col-lg-6 col-12 mb-30">
                      <div class="box">
                          <div class="box-head">
                              <h4 class="title">Change Email</h4>
                          </div>
                          <div class="box-body">
                              <form>
                                  <div class="row mbn-20">

                                      <div class="col-12 mb-20">
                                          <div class="row mbn-10">
                                              <div class="col-sm-3 col-12 mb-10"><label for="formLayoutEmail2">Current Email</label></div>
                                              <div class="col-sm-9 col-12 mb-10"><input type="email" id="formLayoutEmail2" class="form-control" placeholder="Current Email"></div>
                                          </div>
                                      </div>
                                      <div class="col-12 mb-20">
                                          <div class="row mbn-10">
                                              <div class="col-sm-3 col-12 mb-10"><label for="formLayoutPassword2">New Email</label></div>
                                              <div class="col-sm-9 col-12 mb-10"><input type="password" id="formLayoutPassword2" class="form-control" placeholder="New Email"></div>
                                          </div>
                                      </div>
                                      <div class="col-12 mb-20">
                                          <div class="row mbn-10">
                                              <div class="col-sm-3 col-12 mb-10"><label for="formLayoutConfirmPassword2">Confirm New Email</label></div>
                                              <div class="col-sm-9 col-12 mb-10"><input type="password" id="formLayoutConfirmPassword2" class="form-control" placeholder="Confirm New Email"></div>
                                          </div>
                                      </div>

                                      <div class="col-12 mb-20"><label class="adomx-checkbox"><input type="checkbox"><i class="icon"></i>Remember me</label></div>

                                      <div class="col-12 mb-20">
                                          <input type="submit" value="save" class="button button-primary">
                                          <input type="submit" value="Cancel" class="button button-danger">
                                      </div>

                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <!--Horizontal Form End-->



              </div>

                    </form>
                </div>

            </div><!-- Add or Edit Product End -->

        </div><!-- Content Body End -->
  @endsection