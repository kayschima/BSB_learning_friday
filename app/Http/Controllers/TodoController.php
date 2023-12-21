<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        Todo::create([
            'description' => $request->description
        ]);

        return redirect('/');
    }
}