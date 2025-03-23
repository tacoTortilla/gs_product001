<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\TweetLikeController;
//memo_product1_ishi_User_input に関するルートを設定_20250308
use App\Http\Controllers\UserInputController;
use App\Http\Controllers\KeyInputController;
use App\Http\Controllers\PocModelController;
use App\Http\Controllers\PocSlectController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//memo_product1_ishi_User_input に関するルートを設定_20250302
//Route::resource('user_inputs', UserInputController::class);  追記
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('tweets', TweetController::class);
    Route::post('/tweets/{tweet}/like', [TweetLikeController::class, 'store'])->name('tweets.like');
    Route::delete('/tweets/{tweet}/like', [TweetLikeController::class, 'destroy'])->name('tweets.dislike');
    Route::resource('user_inputs', UserInputController::class);
    Route::resource('key_inputs', KeyInputController::class);
    Route::resource('poc_models', PocModelController::class);
    Route::resource('poc_slects', PocSlectController::class);

});

require __DIR__.'/auth.php';
