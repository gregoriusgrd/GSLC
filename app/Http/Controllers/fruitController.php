<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Details;
use Illuminate\Http\Request;

class fruitController extends Controller
{
public function index()
    {
        $fruits = [
            [
                'name' => 'Apple',
                'price' => '15000',
                'expiredDate' => '27 July 2022',
                'isExported' => 'yes',
            ],
            [
                'name' => 'Watermelon',
                'price' => '21000',
                'expiredDate' => '21 Desember 2022',
                'isExported' => 'yes',
            ],
            [
                'name' => 'Orange',
                'price' => '12000',
                'expiredDate' => '22 August 2022',
                'isExported' => 'no',
            ],
            [
                'name' => 'Grape',
                'price' => '14000',
                'expiredDate' => '30 November 2022',
                'isExported' => 'no',
            ],
            [
                'name' => 'Lychee',
                'price' => '17000',
                'expiredDate' => '30 October 2022',
                'isExported' => 'yes',
            ]
        ];
        return view('home', compact('fruits'));
    }
}