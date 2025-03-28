<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tweet;

class TweetLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // 🔽 liked のデータも合わせて取得するよう修正
        $tweets = Tweet::with(['user', 'liked'])->latest()->get();
        // dd($tweets);
        return view('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    //     $tweet->liked()->attach(auth()->id());
    //     return back();
    // }

    public function store(Tweet $tweet)
    {
      $tweet->liked()->attach(auth()->id());
      return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    //     $tweet->liked()->detach(auth()->id());
    //     return back();
    // }

    public function destroy(Tweet $tweet)
    {
      $tweet->liked()->detach(auth()->id());
      return back();
    }
}
