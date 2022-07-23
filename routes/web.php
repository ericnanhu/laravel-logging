<?php

use Illuminate\Support\Facades\Route;
use App\Box;
use Illuminate\Support\Facades\Log;

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
    Log::debug("This is a debug message.");
    Log::info("This is an info level message.");
    Log::notice("This is a notice level message.");
    Log::warning("This is a warning level message.");
    Log::error("This is an error level message.");
    Log::critical("This is a critical level message.");
    Log::alert("This is an alert level message.");
    Log::emergency("This is an emergency level message.");
    return view('welcome');
});

Route::get('/user/{username}', function ($username) {
    $users = ['user1', 'user2', 'user3'];

    if (in_array($username, $users)) {
        return "User found!";
    } else {
        Log::error('User does not exist.');
        return "User does not exist.";
    }
});