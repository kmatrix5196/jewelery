@extends('client.layouts.default')
@section('title','Company Profile')
@section('content')
<!--Mandatory Attributes:
Form 'id': Used to identify the form that will be submitted to the backend.
Form 'action': The address of the backend code that will submit payment request to 2c2p Payment Gateway.
Form 'method': Should be set to 'POST' method.
-->
		<!--Remove attribute 'name' from the following fields: Card number, Cvv, Expiry Month and Year, to prevent
				these data from being sent over to backend side -->
		<!--Mandatory Attributes:
				Input 'data-encrypt':     this attribute must be added for the following fields: Card number, Cvv, Expiry Month and Year.
				values:	data-encrypt="cardnumber"
								data-encrypt="month"
								data-encrypt="year"
								data-encrypt="cvv"
				Input 'type': set type to 'text' for card number, month and year fields, and set type 'password' for cvv field.
		-->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">
                                   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                              width="30" height="30"
                                                              viewBox="0 0 172 172"
                                                              style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                                                            </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
		<div class="col-lg-6">
      <div class="container" align="center">
        <div class="login-reg-form-wrap sign-up-form">
  				<h5 class="Royal_Crescent_Bold">Payment Form</h5>
  				<br>
  				<form id="2c2p-payment-form" action="{{url('check_out')}}" method="POST">
  					<div class="single-input-item">
  						<input type="text" data-encrypt="cardholderName" maxlength="50" placeholder="Name"><br/>
  					</div>
  					<div class="single-input-item">
  						<input type="text" data-encrypt="cardnumber" maxlength="16" placeholder="Credit Card Number"><br/>
  					</div>
  					<div class="single-input-item">
  						<input type="text" data-encrypt="month" maxlength="2" placeholder="MM"><br/>
  					</div>
  					<div class="single-input-item">
  						<input type="text" data-encrypt="year" maxlength="4" placeholder="YYYY"><br/>
  					</div>
  					<div class="single-input-item">
  						<input type="password" data-encrypt="cvv" maxlength="4" autocomplete="off" placeholder="CVV2/CVC2"><br/>
  					</div>
  					<div class="single-input-item">
  						<button class="btn btn-sqr" type="submit">Submit</button>
  					</div>
  				</form>
  			</div>
  		 </div>
      </div>

		<div>
				<!--Importing 2c2p JSLibrary-->
				<script type="text/javascript" src="https://demo2.2c2p.com/2C2PFrontEnd/SecurePayment/api/my2c2p.1.6.9.min.js"></script>
				<script type="text/javascript">
				My2c2p.onSubmitForm("2c2p-payment-form", function(errCode,errDesc){
					if(errCode!=0){
							alert(errDesc+" ("+errCode+")");
					}
				});
				</script>
				@isset($payload)
				<!--Construct form to submit authorization request to 2c2p PGW-->
				<!--Payment request data should be sent to 2c2p PGW with POST method inside parameter named 'paymentRequest'-->
				<form action='https://demo2.2c2p.com/2C2PFrontEnd/SecurePayment/PaymentAuth.aspx' method='POST' name='paymentRequestForm'>
					<!--display wait message to user when page is loading-->
					Processing payment request, Do not close the browser, press back or refresh the page.
					<?php echo "<input type='hidden' name='paymentRequest' value='".$payload."'>"; ?>
				</form>
				<script language="JavaScript">
					document.paymentRequestForm.submit();	//submit form to 2c2p PGW
				</script>
				@endisset
		</div>
</main>
@endsection
