<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Not a good method, done only for educational purposes
|
*/

/*
|--------------------------------------------------------------------------
| Find by Id
|--------------------------------------------------------------------------
*/
Route::get('find', function () {
    return json_encode(DB::select("SELECT * FROM users WHERE id = ?", [1]));
});


/*
|--------------------------------------------------------------------------
| Read
|--------------------------------------------------------------------------
*/
Route::get('/read', function () {
    return json_encode(DB::select("SELECT * FROM users ORDER BY id ASC"));
});

/*
|--------------------------------------------------------------------------
| Create / Insert
|--------------------------------------------------------------------------
*/
Route::get('/create', function () {
    return (DB::insert("INSERT INTO users(name, email, email_verified_at, password, remember_token) VALUEs(?, ?, ?, ?, ?) ", [
        'John Doe',
        'johndoe@mail.com',
        Carbon::now(),
        bcrypt('password'),
        Str::random(8),
    ]));
});



