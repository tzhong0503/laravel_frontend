<html>

<head>
    <meta charset="UTF-8">
    <title>Redirecting to Revpay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form id="paymentForm" action="https://stg-mpg.revpay-sandbox.com.my/v1/payment" method="post" accept-charset="UTF-8">
        <input type="text" name="Merchant_Key" value="{{ $responseData['Merchant_Key'] }}"><br>
        <input type="text" name="Revpay_Merchant_ID" value="{{ $responseData['Revpay_Merchant_ID'] }}"><br>
        <input type="text" name="Reference_Number" value="{{ $responseData['Reference_Number'] }}"><br>
        <input type="text" name="Amount" value="{{ $responseData['Amount'] }}"><br>
        <input type="text" name="Currency" value="{{ $responseData['Currency'] }}"><br>
        <input type="text" name="Transaction_Description" value="{{ $responseData['Transaction_Description'] }}"><br>
        <input type="text" name="Payment_Type" value="{{ $responseData['Payment_Type'] }}"><br>
        <input type="text" name="Key_Index" value="{{ $responseData['Key_Index'] }}"><br>
        <input type="text" name="Return_URL" value="{{ $responseData['Return_URL'] }}"><br>
        <input type="text" name="Signature" value="{{ $responseData['Signature'] }}"><br>
    </form>

    <script>
        document.getElementById('paymentForm').submit();
    </script>

</body>

</html>
