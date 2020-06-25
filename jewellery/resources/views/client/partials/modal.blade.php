<!-- Quick view modal start -->
@php ($a=0)
@auth('company')
@php ($a=1)
@endauth
@isset($temp_products)
@foreach ($temp_products as $temp_product)
<div class="modal" id="quick_view_{{$temp_product['id']}}">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">

                                    <div class="pro-large-img img-zoom">
                                        <img src="{{asset($temp_product['url'])}}" alt="product" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('img/sample/product-sample.jpg" alt="product-details')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <div class="manufacturer-name">
                                        <a href="">{{$temp_product['c_name']}}</a>
                                    </div>
                                    <h3 class="product-name">{{$temp_product['name']}}</h3>
                                    
                                    <div class="price-box">
                                        @if($temp_product['discount']=='')
                                            <span class="price-regular">${{number_format($temp_product['price'],2)}}</span>
                                            
                                            @else
                                            <span class="price-regular">${{number_format($temp_product['discount'],2)}}</span>
                                            <span class="price-old"><del>${{number_format($temp_product['price'],2)}}</del></span>
                                            @endif
                                    </div>
                                    
                                    <p class="pro-desc">{{$temp_product['description']}}</p>
                                        @if($a==0)
                                    
                                    <form action="{{route ('add_to_cart')}}" method="post">
                                                @csrf
                                                
                                                <input type="hidden" name="product_id" value="{{$temp_product['id']}}">
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" name="qty" value="1" min="0"></div>
                                            </div>
                                            
                                            <div class="action_link">
                                                <input type="submit" name="addcart" value="Add to cart" class="btn btn-cart2" >
                                                
                                            </div>
                                        </div>


                                        </form>
                                  @endif
                                </div>
                            </div>
                        </div>
                    </div> <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
@endforeach
@endisset
    <!-- Quick view modal end -->


    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body text-center">
                            <div class="row" style="margin-bottom: 1rem;">
                                <div class="col-12" style="margin-bottom: 1rem;">
                                    <h4>KBZ Pay ဖြင့်ငွေပေးသွင်းရန်</h3>
                                    <br>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('images/kbzpay.png')}}" width="100px" height="100px">
                                </div>
                                <div class="col-4"><h6>Account  No : 111111</h6></div>
                                <div class="col-4">
                                    <img src="{{asset('images/kbzpayqr.png')}} " width="100px" height="100px">
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <div class="row" style="margin-bottom: 1rem;">
                                <div class="col-12" style="margin-bottom: 1rem;">
                                    <h4>Wave Money ဖြင့်ငွေပေးသွင်းရန်</h4>
                                    <br>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('images/wavemoney.png')}}" width="100px" height="100px">
                                </div>
                                <div class="col-4"><h6>Account  No : 111111</h6></div>
                                <div class="col-4">
                                    <img src="{{asset('images/kbzpayqr.png')}} " width="100px" height="100px">
                                </div>
                            </div>
                        </div>
                      
                        <div class="modal-body text-center">
                            <h4 class="text-center">Mobile Banking မှာတစ်ဆင့်ငွေလွှဲရန်</h4>
                            <br>
                            <div class="row">
                                <div class="col-4 text-dark">
                                    <p><strong>KBZ Account </strong> </p>
                                </div>
                                <div class="col-1">|</div>
                                <div class="col-2">Name</div>
                                <div class="col-1">|</div>
                                <div class="col-4">123 223 332 222 1111</div>

                                <div class="col-4 text-dark">
                                    <p><strong>AYA Account </strong> </p>
                                </div>
                                <div class="col-1">|</div>
                                <div class="col-2">Name</div>
                                <div class="col-1">|</div>
                                <div class="col-4">123 223 332 222 1111</div>

                                <div class="col-4 text-dark">
                                    <p><strong>CB Account </strong> </p>
                                </div>
                                <div class="col-1">|</div>
                                <div class="col-2">Name</div>
                                <div class="col-1">|</div>
                                <div class="col-4">123 223 332 222 1111</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>

            </div>

    