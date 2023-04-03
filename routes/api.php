<?php

use App\Http\Controllers\Api\ClientController;
use Illuminate\Support\Facades\Route;

Route::controller(ClientController::class)->group(function () {
    Route::prefix('clients')->group(function () {
        Route::get('/list',  'listAllClients')->name('clients.list');
        Route::get('/list/{id}',  'listOneClient')->name('clients.listOne');
        Route::post('/new', 'createClient')->name('clients.new');
        Route::delete('/del/{id}', 'deleteClient')->name('clients.delete');
        Route::put('/upt/{id}', 'updateClient')->name('clients.update');
    });
});

// Route::controller(InvoiceController::class)->group(function () {
//     Route::prefix('invoices')->group(function () {
//         // ROTAS INVOICE
//     });
// });

Route::get("/", function () {
    return response()->json([
        'success' => true
    ]);
});
