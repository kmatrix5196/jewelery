<?php 
	$response = $_REQUEST["paymentResponse"]; 
	
	//decode response with base64
	$reponsePayLoadXML = base64_decode($response);
	
	//Parse ResponseXML
	$xmlObject =simplexml_load_string($reponsePayLoadXML) or die("Error: Cannot create object");
	
	//decode payload with base64 to get the Reponse
	$payloadxml = base64_decode($xmlObject->payload);
	echo "Response :<br/><textarea style='width:100%;height:80px'>". $payloadxml."</textarea>"; 
?>