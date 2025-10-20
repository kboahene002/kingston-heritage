<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('guest');

Route::get('/login' , function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('moveMoney' , function(){
    return view('move-money');
})->middleware('auth')->name('move-funds');

// Route::get('/dashboard/{email}' , function ($email) {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/logout' , function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::get('/dashboard', function () {

    $history =   \DB::table("banking_history")
    ->where('user_id' , auth()->user()->id)->paginate(20);

    $debit = \DB::table("banking_history")
    ->where('user_id' , auth()->user()->id)
    ->where('type' , 'debit')->sum('amount');

    $credit = \DB::table("banking_history")
    ->where('user_id' , auth()->user()->id)
    ->where('type' , 'credit')->sum('amount');


    $balance = $debit - $credit;
    // dd($balance);

    return view('analytics-dashboard', ['history' => $history , 'credit' => $credit , 'debit' => $debit , 'balance' => $balance]);

})->middleware('auth')->name('dashboard');

Route::get('/link-accounts', function () {
    return view('link-accounts');
})->middleware('auth')->name('link-accounts');

Route::get('/move/crypto', function () {
    return view('crypto');
})->middleware('auth')->name('move-crypto');

Route::get('/help/support' , function () {
    return view('support');
})->middleware('auth')->name('help-support');


Route::get('/update-balance' , function () {
    return view('balance');
})->middleware('auth')->name('update-balance');

