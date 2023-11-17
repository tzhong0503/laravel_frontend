<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Page</title>
</head>

<body>
    <h1>Request Page</h1>
    <form action="{{ url('/submit-payment') }}" method="post">
        @csrf
        <input type="text" name="amount" placeholder="Amount"><br>
        <input type="text" name="currency" placeholder="Currency" value="MYR"><br>
        <input type="text" name="description" placeholder="Description"><br>
        <input type="text" name="payment_type" placeholder="Payment Type" value="credit card"><br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>