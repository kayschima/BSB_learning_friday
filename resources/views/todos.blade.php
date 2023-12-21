<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Die Todos von VD25</title>
</head>
<body>
<div>
    <h1>Die Todos von VD25</h1>
    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo->description }}</li>
        @endforeach
    </ul>
</div>

</body>
</html>
