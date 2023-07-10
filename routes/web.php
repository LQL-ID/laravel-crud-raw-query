<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
| Read
|--------------------------------------------------------------------------
*/
Route::get('/read', function () {
    return json_encode(DB::select("SELECT * FROM users ORDER BY id ASC"));
});


