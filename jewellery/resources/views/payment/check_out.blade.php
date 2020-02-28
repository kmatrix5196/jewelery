<html>
<head>
	<title>2C2P PGW Secure Pay API DEMO (3DS)</title>
</head>

<body>

    <!--Mandatory Attributes:
        Form 'id': Used to identify the form that will be submitted to the backend.
        Form 'action': The address of the backend code that will submit payment request to 2c2p Payment Gateway.
        Form 'method': Should be set to 'POST' method. 
    -->
<form id="2c2p-payment-form" action="./payment_3d.php" method="POST">
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
    <input type="text" data-encrypt="cardnumber" maxlength="16" placeholder="Credit Card Number"><br/>
    <input type="text" data-encrypt="month" maxlength="2" placeholder="MM"><br/>
    <input type="text" data-encrypt="year" maxlength="4" placeholder="YYYY"><br/>
    <input type="password" data-encrypt="cvv" maxlength="4" autocomplete="off" placeholder="CVV2/CVC2"><br/>
    <input type="submit" value="Submit">
</form>

    <!--Importing 2c2p JSLibrary-->
<script type="text/javascript" src="https://demo2.2c2p.com/2C2PFrontEnd/SecurePayment/api/my2c2p.1.6.9.min.js"></script>
<script type="text/javascript">
    My2c2p.onSubmitForm("2c2p-payment-form", function(errCode,errDesc){
        if(errCode!=0){
            alert(errDesc+" ("+errCode+")");
        }
    });
</script> 
</body>
</html>
