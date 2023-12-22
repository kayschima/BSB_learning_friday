<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create(Request $request)
    {
        Todo::create([
            'description' => $request->description
        ]);

        return redirect('/')->with('success', 'Todo erfolgreich hinzugefügt!');;
    }

    public function update(Request $request)
    {
        // dd($request->all());

        for ($i = 0; $i < count($request->id); $i++) {
            $todo              = Todo::find($request->id[$i]);
            $todo->description = $request->description[$i];
            $todo->done        = in_array($request->id[$i], $request->done);
            $todo->save();
        }

        return redirect('/')->with('success', 'Todos erfolgreich aktualisiert!');
    }
}
