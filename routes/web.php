<?php

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
use App\Http\Controllers\AuthEcommerceController;

if( env( 'SHOP_MULTILOCALE' ) )
{
    $locale = ['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}(\_[a-zA-Z]{2})?']];

    Route::get('/', function () {
        return redirect(app()->getLocale());
    });
}

Route::get('/ecommerce-logout', [AuthEcommerceController::class,'home'])->name('ecommerce-logout');
Route::get('/', [AuthEcommerceController::class,'home'])->name('home-page');
Route::get('/ecommerce-signup', [AuthEcommerceController::class,'signup']);
Route::get('/ecommerce-signin',[AuthEcommerceController::class,'login'])->name('ecommerce-login');

Route::post('/ecommerce-signup-store', [AuthEcommerceController::class,'signup_store'])->name('signup_store');
Route::post('/ecommerce-signin-check',[AuthEcommerceController::class,'login_check'])->name('login_check');;


Route::group($locale ?? [], function() {

    // only if SHOP_MULTILOCALE isn't enabled due to restrictions in Laravel
    Auth::routes(['verify' => true]);

    Route::get('/shop', '\Aimeos\Shop\Controller\CatalogController@homeAction')->name('aimeos_home');

    Route::match(['GET', 'POST'], '{path?}', '\Aimeos\Shop\Controller\PageController@indexAction')
        ->name('aimeos_page')->where( 'path', '.*' );

});
