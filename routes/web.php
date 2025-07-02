<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscussionController;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route Admin User
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    
    Route::get('/upload', [UploadController::class, 'index'])->name('upload');
    Route::get('/discussion', [DiscussionController::class, 'index'])->name('discussion');
    Route::get('/comment', [CommentController::class, 'index'])->name('comment');

    // Route Admin Contact
    Route::get('/contact', [ContactController::class, 'indexAdmin'])->name('contact');
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

// Route Upload
Route::get('/upload', function () {
    return view('upload', ['title' => 'Upload Page']);
})->name('upload');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

// Route About
Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
})->name('about');

// Route Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');

Route::get('/community', function () {
    return view('community', ['title' => 'Community Page']);
})->name('community');

Route::get('/join', function () {
    return view('join', ['title' => 'Join Page']);
})->name('join');

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/callback', function () {
//     $githubUser = Socialite::driver('github')->user();
 
//     $user = User::updateOrCreate([
//         'github_id' => $githubUser->id,
//     ], [
//         'name' => $githubUser->name,
//         'email' => $githubUser->email,
//         'github_token' => $githubUser->token,
//         'github_refresh_token' => $githubUser->refreshToken,
//     ]);
 
//     Auth::login($user);
 
//     return redirect('/dashboard');
// });

