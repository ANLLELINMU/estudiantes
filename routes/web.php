<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myfirstcontroller;
use Illuminate\Support\Facades\DB;

Route::get('/', myfirstcontroller::class);
    

Route::get('/listado', function () {
    
    $estudiantes1=DB::table('estudiante')->get();
    
      return  response()->json ($estudiantes1);
    
    
});

Route:: resource('/estudiante', myfirstcontroller::class);
Route:: post('estudiante', [myfirstcontroller::class, 'store'])->name('estudiante.store');






//Route::get('/estudiantes', function () {
  //  return view('estudiantes.index');
//});
//Route::get('/estudiantes/create', function () {
  //  return view('estudiantes.create');

//});
//Route::get('/estudiantes/edit', function () {
   // return view('estudiantes.edit');
//});

//Route::get('/estudiantes/create', [estudiantes::class,'create']);




