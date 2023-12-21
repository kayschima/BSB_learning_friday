<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class HelloWorldController extends Controller
{
    public function index()
    {
        $allTodos = Todo::all();

        return view('todos', [
            'todos' => $allTodos
        ]);
    }
}
