<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Webklex\IMAP\Facades\Client;
use App\Http\Controllers\GithubAuth;
use App\Http\Controllers\GoogleAuth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerMail;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginControllerMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/welcome1', function () {
    return view('welcome1');
});



Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
    
});
Route::get('/posts', function () {
    return view('posts');
    
});
Route::get('/welcome1', function () {
    return view('welcome1');
});


Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::post('/send', [App\Http\Controllers\ContactController::class, 'send'])->name('send.email');

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/post/{id}', 'PostController@show')->name('post.show');
Route::get('/post/{id}', PostController::class . '@show');

Route::get('/posts', [PostController::class, 'showPostsPage'])->name('posts.index');


Route::get('/get-posts-by-category/{category}', [PostController::class, 'getPostsByCategory']);




Route::get('/yes', [EmailController::class, 'index']);
Route::get('/verify_email/{hash}', [EmailController::class, 'VerifyEmail']);

Route::get('/create', [HomeControllerMail::class, 'create'])->name('create');
Route::post('/store', [HomeControllerMail::class, 'store'])->name('store');

Route::get('/login1', [LoginControllerMail::class, 'show'])->name('show');
Route::post('/login1', [LoginControllerMail::class, 'login'])->name('login1');

Route::get('/auth/google', [GoogleAuth::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuth::class, 'callbackGoogle'])->name('google.callback');

Route::get('/auth/github', [GithubAuth::class, 'redirect'])->name('github-auth');
Route::get('/auth/github/call-back', [GithubAuth::class, 'callbackGithub'])->name('github.callback');

Route::get('/forgot_password', [ForgotPassword::class, 'forgotpassword'])->name('forgot.password');
Route::post('/forgot_password', [ForgotPassword::class, 'forgotpasswordpost'])->name('forgot.password.post');

Route::get('/reset_password/{token}', [ForgotPassword::class, 'resetpassword'])->name('reset.password');
Route::post('/reset_password', [ForgotPassword::class, 'resetpasswordpost'])->name('reset.password.post');

Route::get('/posts/search', [PostController::class, 'searchPosts'])->name('posts.search');