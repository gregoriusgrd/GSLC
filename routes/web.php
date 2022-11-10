<?php

use App\Http\Controllers\fruitController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[fruitController::class,'index']);

Route::get('/', function () {
    $fruits = [
        [
            'name' => 'Apple',
            'price' => 'Rp. 15000',
            'expiredDate' => 'Expired Date: 27 July 2022',
            'isExported' => 'no',
        ],
        [
            'name' => 'Watermelon',
            'price' => 'Rp. 21000',
            'expiredDate' => 'Expired Date: 21 May 2022',
            'isExported' => 'yes',
        ],
        [
            'name' => 'Orange',
            'price' => 'Rp. 12000',
            'expiredDate' => 'Expired Date: 22 August 2022',
            'isExported' => 'no',
        ],
        [
            'name' => 'Grape',
            'price' => 'RP. 14000',
            'expiredDate' => 'Expired Date: 30 June 2022',
            'isExported' => 'yes',
        ],
        [
            'name' => 'Lychee',
            'price' => 'Rp. 17000',
            'expiredDate' => 'Expired Date: 30 October 2022',
            'isExported' => 'no',
        ]
    ];
    return view('home', compact('fruits'));
});
