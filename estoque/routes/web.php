<?php

use estoque\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoController::class, 'lista']);
