<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    $check_status= auth()->user()->status;
//    if($check_status!='active'){


//    }else{

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

//    }

});

Route::fallback(function () {
    return response()->view('page-not-found', [], 404);
});

Route::get('/pending-user',function(){
    return view('pending-user');
})->name('pending_user');
