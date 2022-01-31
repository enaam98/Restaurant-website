<?php

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

Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/home', function () {
    return view('BackEnd.Home.index');
});  */
Route::get('/home', 'FrontEndController@index');
Route::get('/category/dish/show/{category_id}'       , 'FrontEndController@dish_show')->name('category_dish');
Route::post('/add/cart'                            , 'cartController@insert')->name('add_to_cart');
Route::get('/add/show'                            , 'cartController@show')->name('cart_show');

Auth::routes();


/*================== category start here =========================*/
Route::get('/category/add'                           , 'categoryController@index')->name('show_cate_table');
Route::post('/category/save'                         , 'categoryController@save')->name('cate_save');
Route::get('/category/manage'                        , 'categoryController@manage')->name('manage_cate');
Route::get('/category/active/{category_id}'          , 'categoryController@active')->name('category_active');
Route::get('/category/Inactive/{category_id}'        , 'categoryController@Inactive')->name('Inactive_cate');
Route::get('/category/delete/{category_id}'          , 'categoryController@delete')->name('cate_delete');
Route::post('/category/update'                       , 'categoryController@update')->name('cate_update');
/*================== category end here =========================*/


/*================== deliveryBoy start here =========================*/
Route::get('/delivery/boy/add'                        , 'deliveryBoyController@index')->name('show_deliveryBoy_add_table');
Route::post('/delivery/boy/save'                      , 'deliveryBoyController@save_boy')->name('delivery_save');
Route::get('/delivery/boy/manage'                     , 'deliveryBoyController@boy_manage')->name('delivery_boy_manage');
Route::get('/delivery/boy/delete/{delivery_boy_id}'   , 'deliveryBoyController@boy_delete')->name('delivery_boy_delete');
Route::get('/delivery/boy/inactive/{delivery_boy_id}' , 'deliveryBoyController@boy_inactiv')->name('delivery_boy_inactive');
Route::get('/delivery/boy/active/{delivery_boy_id}'   , 'deliveryBoyController@boy_activ')->name('delivery_boy_active');
Route::post('/delivery/boy/update'                    , 'deliveryBoyController@boy_update')->name('delivery_boy_update');
/*================== deliveryBoy end here =========================*/


/*================== Dish start here =========================*/
Route::get('/dish/add'                               , 'DishController@index')->name('show_dish_table');
Route::post('/dish/save'                             , 'DishController@save_dish')->name('save_dish_data');
Route::get('/dish/manage'                            , 'DishController@manage_dish')->name('manage_dish_table');
Route::get('/dish/inactive/{dish_id}'                , 'DishController@inactive')->name('dish_inactive');
Route::get('/dish/active/{dish_id}'                  , 'DishController@active')->name('dish_active');
Route::get('/dish/delete/{dish_id}'                  , 'DishController@dish_delete')->name('delete_dish');
Route::post('/dish/update'                           , 'DishController@dish_update')->name('update_dish');

/*================== Dish end here =========================*/

