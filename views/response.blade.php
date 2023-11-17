<!-- resources/views/payment.blade.php -->

<html>
<head>
    <!-- Add any necessary styles or scripts -->
</head>
<body>

    <!-- Render the payment form with the received data -->
    <form id="paymentForm" action="https://stg-mpg.revpay-sandbox.com.my/v1/payment" method="post">
        <!-- Add form fields with data from $responseData -->
        <input type="text" name="Revpay_Merchant_ID" value="{{ $responseData['Revpay_Merchant_ID'] }}"><br>
        <input type="text" name="Merchant_Key" value="{{ $responseData['Merchant_Key'] }}"><br>
        <input type="text" name="Key_Index" value="{{ $responseData['Key_Index'] }}"><br>
        <input type="text" name="Reference_Number" value="{{ $responseData['Reference_Number'] }}"><br>
        <input type="text" name="Amount" value="{{ $responseData['Amount'] }}"><br>
        <input type="text" name="Currency" value="{{ $responseData['Currency'] }}"><br>
        <input type="text" name="Transaction_Description" value="{{ $responseData['Transaction_Description'] }}"><br>
        <input type="text" name="Signature" value="{{ $responseData['Signature'] }}"><br>
    </form>

    <!-- Add JavaScript to automatically submit the form -->
    <script>
        document.getElementById('paymentForm').submit();
    </script>

</body>
</html>
