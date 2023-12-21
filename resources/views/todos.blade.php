<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Die Todos von VD25</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-blue-300 max-w-2xl mx-auto rounded-xl p-4 mt-4">
    <h1 class="text-2xl font-bold underline mb-4">Die Todos von VD25</h1>
    <table class="table table-fixed border border-2  border-gray-900 rounded text-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Beschreibung</th>
            <th>erld.?</th>
            <th>erstellt</th>
            <th>geändert</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo)
            <tr class="text-sm border border-gray-900">
                <td class="border border-gray-900 px-2 py-1">{{ $todo->id }}</td>
                <td class="border border-gray-900 px-2 py-1">{{ $todo->description }}</td>
                <td class="border border-gray-900 px-2 py-1">{{ $todo->done?'X':'' }}</td>
                <td class="border border-gray-900 px-2 py-1">{{ $todo->created_at }}</td>
                <td class="border border-gray-900 px-2 py-1">{{ $todo->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
