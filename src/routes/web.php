<?php
namespace Karabella\Laramarket\routes;

use Karabella\Laramarket\Http\Controllers\LaramarketController;

Route::get('/laramarket', function(){return "Laramarket route test";});
Route::get('/laramarket2', [LaramarketController::class, 'index']);