<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;

/*
 * Blog use controllers
 */

use App\Http\Controllers\Front\Blog\BlogIndexController;

/*
 * Category use controllers
 */

use App\Http\Controllers\Front\Category\CategoryIndexController;

/*
 * Product use controllers
 */

use App\Http\Controllers\Front\Product\ProductShowController;

/*
 * Order use controllers
 */

use App\Http\Controllers\Front\Order\OrderIndexController;

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

Route::group([
    'as' => 'pages.'
], function () {
    Route::get('/', [PagesController::class, 'indexPage'])->name('index');
    Route::get('/test', function () {
        return view('front.test');
    });
});

/*
 * Blogs routes
 */

Route::group([
    'prefix' => 'blog',
    'as'     => 'blog.'
], function () {
    Route::get('/', BlogIndexController::class)->name('index');
});

/*
 * Categories routes
 */

Route::group([
    'prefix' => 'category',
    'as'     => 'category.'
], function () {
    Route::get('/', CategoryIndexController::class)->name('index');
});

/*
 * Products routes
 */

Route::group([
    'prefix' => 'product',
    'as'     => 'product.'
], function () {
    Route::get('/', ProductShowController::class)->name('show');
});

