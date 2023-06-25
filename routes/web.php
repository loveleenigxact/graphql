<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Article;
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

    User::updateOrCreate([
        'email' => 'jdoe33@gmail.com'
    ],[
        'name' => 'John Doe',
        'email' => 'jdoe33@gmail.com',
        'password' => bcrypt('password')
    ]);


    $users = User::all();

    print_r($users);
});
Route::get('/article', function () {

    Article::updateOrCreate([
        'name' => 'John Doe11',
        'is_completed' => 'yes',
        'deadline_date' => '2023-06-29 08:48:11'
    ]);


    $article = Article::all();

    print_r($article);
});