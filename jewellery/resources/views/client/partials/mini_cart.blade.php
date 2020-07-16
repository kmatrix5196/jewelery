@isset($cart)
@php
                                        {{$total=0;
                                            $tax=11;

                                            $shipping=0;
                                        }}
                                        @endphp
<div class="offcanvas-minicart-wrapper">
    <div class="minicart-inner">
        <div class="offcanvas-overlay"></div>
        <div class="minicart-inner-content">
            <div class="minicart-close">
                <i class="pe-7s-close"></i>
            </div>
            <div class="minicart-content-box">
                <div class="minicart-item-wrapper">
                    <ul>
                        @foreach($cart as $c)
                        <li class="minicart-item">
                            <div class="minicart-thumb">
                                <a href="product-details">
                                    <img src="{{asset($c['url'])}}" alt="product">
                                </a>
                            </div>
                            <div class="minicart-content">
                                <h3 class="product-name">
                                    <a href="product-details">{{$c['name']}}</a>
                                </h3>
                                <p>
                                    <span class="cart-quantity">{{$c['quantity']}} <strong>&times;</strong></span>
                                    @if($c['discount']=='')
                                    @php
                                            {{$total +=$c['price']*$c['quantity'];}}
                                            @endphp
                                    <span class="cart-price">{{number_format($c['price'])}} MMK</span>
                                    @else
                                    @php
                                            {{$total +=$c['discount']*$c['quantity'];}}
                                            @endphp
                                      <span class="cart-price">{{number_format($c['discount'])}} MMK</span>      
                                    @endif
                                    @php
                                            {{$shipping =$shipping+$c['deli_fee'];}}
                                            @endphp
                                </p>
                            </div>
                            <a href="/home/delete-cart/{{$c['c_id']}}"><button class="minicart-remove"><i class="pe-7s-close"></i></button></a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="minicart-pricing-box">
                    <ul>
                        <li>
                            <span>sub-total</span>
                            <span><strong>{{number_format($total) }} MMK</strong></span>
                        </li>
                        <li>
                            <span>Shipping</span>
                            <span><strong>{{number_format($shipping) }} MMK</strong></span>
                        </li>
                        <li>
                            <span>Tax</span>
                            <span><strong>{{number_format($tax)}} %</strong></span>
                        </li>
                        <li class="total">
                            <span>total</span>
                            <span><strong>{{number_format(($total*$tax/100)+$shipping+$total)}}</strong></span>
                        </li>
                    </ul>
                </div>

                <div class="minicart-button">
                    <a href="/home/cart"><i class="fa fa-shopping-cart"></i> View Cart</a>
                    <a href="cart"><i class="fa fa-share"></i> Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endisset