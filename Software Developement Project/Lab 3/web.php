<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Route:: view('/','welcome');

//Route::get('/home',function (){
    //return view('homepage');
//});

Route::get('/user/{id}/{name?}',function (string $id,string $name=null) {
   // return 'User Page  - ID: ' . $id .' Name';
    return view('user' ,['id'=>$id,'name'=>$name]);
})->whereAlpha('name')->whereNumber('id');

Route::get('/home',[UserController::class,'index']);


Route::prefix('greeting')->group(function (){
     Route::get('/about',function (){

     });

Route::get('/greeting',function (){
    return  'Greeting Page';
})->name('gt'); 

Route::get('/name',function (){
    return  'Greeting Page - Name';
})->name('gtn'); 
Route::get('/name',function (){
    return  'Greeting Page - Adress';
})->name('gta'); 

});