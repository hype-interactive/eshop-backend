<?php

use App\Http\Controllers\UserFeedBackController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::post('user-feedback',[UserFeedBackController::class,'createFeedBack'])->name('user-feedback');
Route::get('user-logout',function(){
    Auth::logout();

    // Optionally, invalidate the session
    request()->session()->invalidate();

    // Regenerate the CSRF token
    request()->session()->regenerateToken();

    return redirect('/login');

})->name('user-logout');

Route::get('update-user-status',function(){
    DB::table('users')->where('status','pending')->update(['status'=>'active']);
});
