<?php

use App\Http\Controllers\Api\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/list', [ClientController::class, 'listAllClients']);
    Route::post('/new', [ClientController::class, 'createClient']);
    Route::delete('/del/{id}', [ClientController::class, 'deleteClient']);
    Route::put('/upt/{id}', [ClientController::class, 'updateClient']);
});

Route::get("/", function () {
    return response()->json([
        'success' => true
    ]);
});
