<?php

use Illuminate\Support\Facades\Route;


Route::apiResource('contracts','App\Http\Controllers\API\ContractsController');

Route::apiResource('equipaments', 'App\Http\Controllers\API\equipamentsController');
