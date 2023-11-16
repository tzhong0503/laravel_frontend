<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Page</title>
</head>
<body>
    <h1>Response Page</h1>
    <pre>{{ json_encode($response, JSON_PRETTY_PRINT) }}</pre>

    <h2>Update Status Response</h2>
    <pre>{{ json_encode($updateStatusResponse, JSON_PRETTY_PRINT) }}</pre>
</body>
</html>
