<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tea Home page</title>
</head>
<body>
    <h1>Teas</h1>

    <ul>
        @foreach ($teas as $tea)
            <li>

                <a href="/teas/{{$tea['id']}}">{{$tea['name']}}</a>
            </li>
        @endforeach

    </ul>

</body>
</html>