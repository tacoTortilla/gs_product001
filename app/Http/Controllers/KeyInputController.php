<?php

namespace App\Http\Controllers;

use App\Models\Key_input;
use Illuminate\Http\Request;

class KeyInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$key_inputs = Key_input::with('user')->latest()->get();
        //return view('key_inputs.index', compact('key_inputs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $key_inputs = Key_input::with('user')->latest()->get();
        return view('key_inputs.create', compact('key_inputs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'keyword' => 'required|max:255',
        ]);
      
        $request->user()->key_inputs()->create($request->only('keyword'));
        return redirect()->route('key_inputs.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Key_input $key_input)
    {
        //
        return view('key_inputs.show', compact('key_input'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Key_input $key_input)
    {
        //
        //dd($key_input);
        return view('key_inputs.edit', compact('key_input'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Key_input $key_input)
    {
        //
        $request->validate([
            'keyword' => 'required|max:255',
        ]);
        $key_input->update($request->only('keyword'));
        //dd($key_input);
      
        return redirect()->route('key_inputs.show', $key_input);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Key_input $key_input)
    {
        //
        $key_input->delete();

        //return redirect()->route('key_inputs.show');
        return redirect()->route('key_inputs.create');
    }
}
