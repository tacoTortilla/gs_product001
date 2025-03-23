<?php

namespace App\Http\Controllers;

use App\Models\Poc_slect;
use App\Models\Key_input;//追加
use App\Models\User_input;//追加
use App\Models\User;//追加
use App\Models\Poc_model;//追加
use Illuminate\Http\Request;

class PocSlectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $key_inputs = Key_input::all();

        // `poc_models` を `poc_slects` に関連付けて取得
        // with(['user', 'pocModels']) で、user と pocModels のリレーションを同時にロードする
        // $poc_slects = Poc_Slect::with(['user', 'pocModels'])->latest()->get();
        // 最新のデータだけにする
        $poc_slects = Poc_Slect::with(['user', 'pocModels'])->latest()->first();

        return view('poc_slects.index', compact('poc_slects','key_inputs'));
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

        return view('poc_slects.create', compact('key_inputs'));
        //return view('poc_slects.create' );
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'key_input_id' => 'required|max:255',
        ]);
      
        //dd($request);
        $request->user()->poc_slects()->create($request->only('key_input_id'));
        return redirect()->route('poc_slects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Poc_slect $poc_slect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poc_slect $poc_slect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poc_slect $poc_slect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poc_slect $poc_slect)
    {
        //
    }
}
