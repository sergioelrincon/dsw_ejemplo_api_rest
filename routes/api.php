<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function() {
    return response()->json([
        'data' => array(1=>array("username"=>"Usuario1", "age"=>22), 2=>array("username"=>"Usuario2","age"=>33), 3=>array("username"=>"Usuario3","age"=>44)),
        'message' => 'Succeed'
    ], JsonResponse::HTTP_OK);
});
