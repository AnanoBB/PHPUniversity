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

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Http\Request;

Route::get("/formtosendpostmethod", function(){
    return view('guest.single');
});

Route::post("/testrequest", function(Request $request){

    $data=[
        "name" => $request->post()["name"],
        "surname" => $request->post()["surname"],
        "address" => $request->post()["address"],
        "bio" => $request->post()["bio"],
        "date" => $request->post()["date"]
    ];
    return view("guest.table",['newdata'=>$data]);
    
})->name("posttest");




