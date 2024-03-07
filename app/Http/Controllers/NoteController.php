<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function update()
    {
    }

    public function store(Request $request)
    {
        Note::create($request->all());

        return redirect()->route('home')->with('success', 'Berhasil Menambahkan data');
    }
}
