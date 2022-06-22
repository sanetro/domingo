<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domingo & Products</title>
</head>
<body>
    <h1>Products</h1>
    <p>{{ $greetings }}</p>
    <p>{{ $description }}</p>
    <br>
    <div id="btn-with-url-callback">
        <a href="{{ route('products') }}"> <button>Click me to get again on this page</button> </a>
        <a href="{{ route('products') }}/vegetables"> <button>Redirect me to vegetables</button> </a>
    </div>
</body>
</html>
