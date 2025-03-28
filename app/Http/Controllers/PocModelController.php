<?php

namespace App\Http\Controllers;

use App\Models\Poc_model;
use App\Models\Key_input;
use Illuminate\Http\Request;

class PocModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $poc_models = Poc_model::with('key_input')->latest()->get();
        return view('poc_models.index', compact('poc_models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //key_inputs テーブルのデータを取得
        //プルダウンで選択できるようにするため
        $key_inputs = Key_input::all(); 

        return view('poc_models.create', compact('key_inputs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'key_input_id' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'cost_estimate' => 'required',
            'provider' => 'required',
            'image_path' => 'required',
            'success_cases' => 'required',
        ], [
            'key_input_id.required' => 'キーワードを選択してください。',
            'name.required' => '名前を入力してください。',
            'description.required' => '説明を入力してください。',
            'category.required' => 'カテゴリを入力してください。',
            'cost_estimate.required' => '費用を入力してください。',
            'provider.required' => '会社を入力してください。',
            'image_path.required' => 'システム画像を入力してください。',
            'success_cases.required' => '事例画像を入力してください。',
        ]);
      
        //Poc_model::create($request->all());
        Poc_model::create($request->except(['_token']));

        return redirect()->route('poc_models.index')->with('success', '登録しました');

    }

    /**
     * Display the specified resource.
     */
    public function show(Poc_model $poc_model)
    {
        //
        //key_inputs テーブルのデータを取得
        //プルダウンで選択できるようにするため
        $key_inputs = Key_input::all(); 

        return view('poc_models.show', compact('poc_model','key_inputs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poc_model $poc_model)
    {
        //
        //key_inputs テーブルのデータを取得
        //プルダウンで選択できるようにするため
        $key_inputs = Key_input::all(); 

        return view('poc_models.edit', compact('poc_model','key_inputs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poc_model $poc_model)
    {
        //
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $request->validate([
            'key_input_id' => 'required',
        ], [
            'key_input_id.required' => 'キーワードを選択してください。',
        ]);
        
        //$poc_model->update($request->only('name'));
        $poc_model->update($request->all());

        //dd($key_input);
      
        return redirect()->route('poc_models.show', $poc_model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poc_model $poc_model)
    {
        //
        $poc_model->delete();

        return redirect()->route('poc_models.index');
    }
}
