<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrcamentoController;

Route::group([
    'prefix' => 'v1',
], function () {
    Route::post('/orcamento', [OrcamentoController::class,'store']);
});
