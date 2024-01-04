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
<body class="antialiased">
<div class="container max-w-4xl mx-auto mt-4">
    {{--    Überschrift--}}
    <h1 class="text-2xl font-bold underline mb-4">Die Todos von VD25</h1>

    {{--    Tabellarische Übersicht--}}
    <form action="/todos/update" method="post">
        @csrf


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Beschreibung
                    </th>
                    <th scope="col" class="px-6 py-3">
                        erled.?
                    </th>
                    <th scope="col" class="px-6 py-3">
                        erstellt
                    </th>
                    <th scope="col" class="px-6 py-3">
                        geändert
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $todo->id }}
                            <input type="hidden" name="id[]" value={{ $todo->id }}>
                        </th>
                        <td class="px-6 py-2">
                            <input class="rounded text-gray-900 focus:bg-gray-100 border border-gray-900 px-2 py-1"
                                   type="text" name="description[]"
                                   value="{{ $todo->description }}">
                        </td>
                        <td class="px-6 py-2">
                            <input type="checkbox" name="done[]" value={{$todo->id}} {{ $todo->done?'checked':'' }}>
                        </td>
                        <td class="px-6 py-2">
                            {{ $todo->formattedCreatedAt }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $todo->formattedUpdatedAt }}
                        </td>
                        <td class="px-6 py-2 text-right">
                            <a href="#" class="text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <button type="submit"
                class="mt-4 text-sm border border-gray-900 bg-gray-200 text-gray-900 hover:bg-gray-900 hover:text-gray-400 rounded px-2 py-1">
            Speichern
        </button>
    </form>

    {{--    Erfolgsmeldung beim Speichern und Hinzufügen von Todos--}}
    @session('success')
    <div class=" my-2 text-xs bg-green-200 border border-green-900 rounded p-2">
        {{ $value }}
    </div>
    @endsession

    {{--    Formular zum Hinzufügen von Todos--}}
    <div class="mt-4 p-2 bg-gray-50 rounded border border-2 border-gray-900">
        <h3 class="text-md font-bold underline">Todos hinzufügen</h3>
        <form class="mt-2 flex items-center space-x-4" action="/todos/create" method="post">
            @csrf
            <label class="text-sm" for="description">Beschreibung</label>
            <input class="rounded text-gray-900 focus:bg-gray-100 border border-gray-900 px-2 py-1" type="text"
                   name="description"
                   id="description">
            <button type="submit"
                    class="text-sm border border-gray-900 bg-gray-200 text-gray-900 hover:bg-gray-900 hover:text-gray-400 rounded px-2 py-1">
                Hinzufügen
            </button>
        </form>
    </div>

</div>

</body>
</html>
