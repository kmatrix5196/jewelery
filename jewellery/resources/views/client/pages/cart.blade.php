    @extends('client.layouts.default')
    @section('title','Cart')
    @section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">
                                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                      width="30" height="30"
                                      viewBox="0 0 172 172"
                                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                                    </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">

                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered" id="cart_table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        {{$total=0;
                                            $tax=11;

                                            $shipping=0;
                                        }}
                                        @endphp
                                            @isset($cart)
                                            @foreach($cart as $c)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{asset($c['url'])}}" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#">{{$c['name']}}</a></td>
                                            @if($c['discount']=='')
                                            <td class="pro-price"><span>{{number_format($c['price'])}} MMK</span></td>

                                            @else
                                            <td class="pro-price"><span>{{number_format($c['discount'])}} MMK</span></td>
                                            @endif

                                            <td class="pro-quantity" >
                                                <div class="pro-qty">
                                                    <span class="dec qtybtn" onclick="dec_updateQty({{$c['c_id']}})">-</span>
                                                    <input type="text" value="{{$c['quantity']}}" id="{{$c['c_id']}}" >
                                                    <span class="inc qtybtn" onclick="inc_updateQty({{$c['c_id']}})">+</span>
                                                </div>
                                            </td>
                                            @if($c['discount']=='')
                                            <td class="pro-subtotal" id="zzz"><span>{{number_format($c['price']*$c['quantity'])}} MMK</span></td>
                                            @php
                                            {{$total +=$c['price']*$c['quantity'];}}
                                            @endphp
    
                                            @else
                                            <td class="pro-subtotal" id="zzz"><span>
                                            {{number_format($c['discount']*$c['quantity'])}} MMK</span></td>
                                            @php
                                            {{$total +=$c['discount']*$c['quantity'];
                                            }}
                                            @endphp

                                            @endif
                                            @php
                                            {{$shipping =$shipping+$c['deli_fee'];}}
                                            @endphp
                                            <td class="pro-remove"><a href="/home/delete-cart/{{$c['c_id']}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h6>Cart Totals</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>{{number_format($total) }} MMK</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>{{number_format($shipping)}} MMK</td>
                                            </tr>
                                            <tr>
                                                <td>Tax</td>
                                                <td>{{number_format($tax)}} %</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">{{number_format(($total*$tax/100)+$shipping+$total)}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#checkout" class="btn btn-sqr d-block">Proceed Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>

    @endsection
