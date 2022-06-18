<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->

    <!-- Background -->
    <link rel="stylesheets" type="text/css" href="./css/main.css">
    <style>
        body {
            background-color: darkslategrey;
            color: azure;    
        }
    </style>
    
    <title>Vegetables</title>
</head>
<body>
    <h1>Vegetables</h1>
    @foreach ($data as $item)
        <p>
            {{ $item }}
        </p>
    @endforeach
</body>
</html>