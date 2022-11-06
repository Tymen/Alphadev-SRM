<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($servers as $server)
    <ul>
        <li>{{ $server["attributes"]["name"] }}</li>
        <ul>
            <li>Allocated memory: {{ $server["attributes"]["limits"]["memory"] }} MiB</li>
            <li>Disk: {{ $server["attributes"]["limits"]["disk"] }} MiB</li>
        </ul>
    </ul>
    @endforeach
</body>
</html>