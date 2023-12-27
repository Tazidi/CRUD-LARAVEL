<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jersey;

class JerseyController extends Controller
{

    public function index()
    {
        $jerseys = Jersey::all();
        return view('jerseys.index', compact('jerseys'));
    }

    public function create()
    {
        return view('jerseys.create');
    }

    public function store(Request $request)
    {
        Jersey::create($request->all());
        return redirect()->route('jerseys.index');
    }

    public function edit(Jersey $jersey)
    {
        return view('jerseys.edit', compact('jersey'));
    }

    public function update(Request $request, Jersey $jersey)
    {
        $jersey->update($request->all());
        return redirect()->route('jerseys.index');
    }

    public function destroy(Jersey $jersey)
    {
        $jersey->delete();
        return redirect()->route('jerseys.index');
    }

    
}
