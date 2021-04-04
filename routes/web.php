<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function(){
    return view('avisos', [
        'nome' => 'Joao',
        'mostrar' => true,
        'avisos' => [
            [
                'id' => 1,
                'texto' => 'Feriados agora'
            ],
            [
                'id' => 2,
                'texto' => 'Feriado semana que vem'
            ],
        ]
    ]);
});

Route::get('/vitrine', function(){
    return view('vitrine', [
        'produto' => [
            'price' => 200,
            'name' => 'Boneco fuko 1',
            'image' => 'https://geekfanaticos.fbitsstatic.net/img/p/funko-pop-iron-man-i-am-iron-man-px-exclusive-580-avengers-endgame-vingadores-ultimato-marvel-71447/257932.jpg?w=540&h=540&v=no-change'
        ]
    ]);
});
