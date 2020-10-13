<?php

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

Route::get('/test', function () {
    $a = [4, 0, 1, -2, 3, 2, 1998, -10000, 1, 2, -4, -123];
    $b = [];
    for ($i = 0; $i < count($a); $i++) {
        if ($i == 0) {
            $b[$i] = $a[$i] + $a[$i + 1];
        } elseif ($i == count($a) - 1) {
            $b[$i] = $a[$i] + $a[$i - 1];
        } else {
            $b[$i] = $a[$i-1] + $a[$i] + $a[$i + 1];
        }
    }
    print_r($b);
});
