<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function ()
{
    $user = User::create([
        'first_name' => "Trong Lan",
        'last_name' => "Dinh",
        'email' => "alandin0812@gmail.com",
        'password' => "12345678",
    ]);

    dd(User::all());
});

Route::get('/post', function ()
{
    $user = Post::create([
        'title' => "This is title 2",
        'content' => "This is content 2",
        'user_id' => 1,
    ]);

    dd(Post::all());
});
