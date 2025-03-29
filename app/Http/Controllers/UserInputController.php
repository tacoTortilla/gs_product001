<?php

namespace App\Http\Controllers;

use App\Models\User_input;
use App\Models\Poc_model;
use App\Models\Key_input;
use Illuminate\Http\Request;

class UserInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 🔽 追加
        $user_inputs = User_input::with('user')->latest()->get();
        return view('user_inputs.index', compact('user_inputs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 🔽 追加
        return view('user_inputs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "<pre>";
        //var_dump($request);
        //echo "</pre>";

        //dd($request);

        $request->validate([
            'input_content_problem' => 'required|max:255',
        ], [
            'input_content_problem.required' => 'お困りごとを入力ください',
        ]);
      
        //$request->user()->user_inputs()->create($request->only('input_content_problem'));
        $request->user()->user_inputs()->create($request->all());
        //dd($request);
        //検索画面へ戻る
        return redirect()->route('poc_slects.create');
        //return redirect()->route('user_inputs.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(User_input $user_input)
    {
        //
        //dd($user_input);
        return view('user_inputs.show', compact('user_input'));
        //return view('user_inputs.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_input $user_input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User_input $user_input)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_input $user_input)
    {
        //
        $user_input->delete();

        return redirect()->route('user_inputs.index');
    }
}
