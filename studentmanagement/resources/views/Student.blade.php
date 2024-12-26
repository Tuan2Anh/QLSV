<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @yield('content');
    </div>
    <thead>
        <tr>
            <th>student</th>
        </tr>
    </thead>
    <tbody>
        {{$students}}
    </tbody>
</body>
</html>