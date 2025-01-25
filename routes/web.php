<?php

use App\Http\Controllers\UrlParserController;
use Illuminate\Support\Facades\Route;

Route::get('url/parse/', [UrlParserController::class, 'parse']);
