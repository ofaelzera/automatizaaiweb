<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',                                 [HomeController::class, 'index'])->name('site.index');
Route::get('/desenvolvimento-site-aplicativo',  [HomeController::class, 'desenvolvimemnto_site'])->name('site.servicos.site');
Route::get('/design-grafico',                   [HomeController::class, 'designer'])->name('site.servicos.designer');
Route::get('/seo',                              [HomeController::class, 'seo'])->name('site.servicos.seo');
Route::get('/marketing-digital',                [HomeController::class, 'midia_digital'])->name('site.servicos.marketing');
Route::get('/analise-de-dados',                 [HomeController::class, 'analise_dados'])->name('site.servicos.analise');
Route::get('/midia-digital',                    [HomeController::class, 'midia_digital'])->name('site.servicos.midia');
