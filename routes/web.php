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
   //return view('welcome');

   $data = config('comics');
   $menuHeader = config('menu-header');
   return view('home',["fumetti"=>$data,"linksHeader"=> $menuHeader]);
});

Route::get('/cardDetail',function(){
    $data = config('comics');
    $menuHeader = config('menu-header');
    return view('cardDetail',["fumetti"=>$data[0],"linksHeader"=> $menuHeader]);
});

