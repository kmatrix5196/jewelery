<?php 
	//Merchant's account information
	$merchantID = "JT02";		//Get MerchantID when opening account with 2C2P
	$secretKey = "YDRbw14OtHw3";	//Get SecretKey from 2C2P PGW Dashboard
	
	//Transaction Information
	$desc = "2 days 1 night hotel room";
	$uniqueTransactionCode = time();
	$currencyCode = "104";
	$amt  = "000000000010"; //Myanmar's minor unit is 2
	$panCountry = "MM";

	//Customer Information
	$cardholderName = "John Doe";
 
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
?>

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