<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Message;
use ParagonIE\ConstantTime\Hex;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/candidates', [HomeController::class, 'candidates']);

Route::get('/jessica', [HomeController::class, 'jessica']);

Route::get('/blog2', [HomeController::class, 'blog2']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/message', [HomeController::class, 'message']);

Route::get('/board', [HomeController::class, 'board']);

Route::get('/board-member-agreement', [HomeController::class, 'agreement']);

Route::get('/volunteers', [HomeController::class, 'volunteers']);

Route::get('/association', [HomeController::class, 'association']);

Route::get('/history', [HomeController::class, 'history']);

Route::get('/trademark', [HomeController::class, 'trademark']);

Route::get('/terms', [HomeController::class, 'terms']);

Route::get('/license', [HomeController::class, 'license']);

Route::get('/definition', [HomeController::class, 'definition']);

Route::get('/category', [HomeController::class, 'category']);

Route::get('/name', [HomeController::class, 'name']);

Route::get('/review', [HomeController::class, 'review']);

Route::get('/community', [HomeController::class, 'community']);

Route::get('/individuals', [HomeController::class, 'individuals']);

Route::get('/sponsor', [HomeController::class, 'sponsor']);

Route::get('/mailing', [HomeController::class, 'mailing']);

Route::get('/resources', [HomeController::class, 'resources']);

Route::get('/help', [HomeController::class, 'help']);

Route::get('/education', [HomeController::class, 'education']);

Route::get('/articles', [HomeController::class, 'articles']);

Route::get('/news', [HomeController::class, 'news']);

Route::get('/boardmember', [HomeController::class, 'boardmember']);

Route::get('/osilinks', [HomeController::class, 'osilinks']);

Route::get('/stefano', [HomeController::class, 'stefano']);

Route::get('/talkboss', [HomeController::class, 'talkboss']);

Route::get('/blog', [HomeController::class, 'blog']);

Route::get('/newsletter', [HomeController::class, 'newsletter']);

Route::get('/join', [HomeController::class, 'join']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
