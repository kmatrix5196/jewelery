<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

	public function __construct()
	{
		 $this->middleware('auth:user');
	}

	public function check_out(Request $request)
	{
		$userid=auth()->user()->id;
		$cart = Cart::leftJoin('product','product.id','=','cart.product_id')
		->where('cart.user_id','=',$userid)
		->select('cart.*','cart.id as c_id','product.*','product.id as p_id')
		->get();
		//dd(DB::getQueryLog());

		$merchantID = "JT02";		//Get MerchantID when opening account with 2C2P
		$secretKey = "YDRbw14OtHw3";	//Get SecretKey from 2C2P PGW Dashboard

		//Transaction Information
		$desc ="zzzz";
		$uniqueTransactionCode = time();
		$currencyCode = "104";
		$amt = 0;
		foreach ($cart as $c) {
			$amt += $c->quantity * $c->price;
		};
		$panCountry = "MM";//Myanmar's minor unit is 2

		//Customer Information
		$cardholderName = $request->cardholderName;

		//Encrypted card data
		$encCardData = $_POST['encryptedCardInfo'];

		//Retrieve card information for merchant use if needed
		$maskedCardNo = $_POST['maskedCardInfo'];
		$expMonth = $_POST['expMonthCardInfo'];
		$expYear = $_POST['expYearCardInfo'];

		//Request Information
		$version = "9.9";

		//Construct payment request message
		$xml = "<PaymentRequest>
			<merchantID>$merchantID</merchantID>
			<uniqueTransactionCode>$uniqueTransactionCode</uniqueTransactionCode>
			<desc>$desc</desc>
			<amt>$amt</amt>
			<currencyCode>$currencyCode</currencyCode>
			<panCountry>$panCountry</panCountry>
			<cardholderName>$cardholderName</cardholderName>
			<encCardData>$encCardData</encCardData>
			</PaymentRequest>";
		$paymentPayload = base64_encode($xml); //Convert payload to base64
		$signature = strtoupper(hash_hmac('sha256', $paymentPayload, $secretKey, false));
		$payloadXML = "<PaymentRequest>
	           <version>$version</version>
	           <payload>$paymentPayload</payload>
	           <signature>$signature</signature>
	           </PaymentRequest>";
		$payload = base64_encode($payloadXML); //encode with base64
		return view('payment.check_out', ['payload' => $payload]);
	}
}
