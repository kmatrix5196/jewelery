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
                        <h3>Product Payment</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                <!--Form Wizard Horizontal Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">

                        </div>
                        <div class="box-body">

                            <div class="smart-wizard">
                                <ul>
                                    <li><a href="#step-1">1. Step One</a></li>
                                    <li><a href="#step-2">2. Step Two</a></li>
                                    <li><a href="#step-3">3. Step Three</a></li>
                                    <li><a href="#step-4">4. Step Four</a></li>
                                </ul>

                                <div>
                                    <div id="step-1">
                                        <form action="#">
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Step 1 Form</h4>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                                <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="step-2">
                                        <form action="#">
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Step 2 Form</h4>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                                <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="step-3">
                                        <form action="#">
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Step 3 Form</h4>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                                <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="step-4">
                                        <form action="#">
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Step 4 Form</h4>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="text" placeholder="Your Name" class="form-control"></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="email" placeholder="Your Email" class="form-control"></div>
                                                <div class="col-12 mb-20"><textarea class="form-control" placeholder="Message"></textarea></div>
                                                <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Form Wizard Horizontal End-->




            </div>

        </div><!-- Content Body End -->
        @endsection