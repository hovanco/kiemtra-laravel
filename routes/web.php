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

Route::get('/', function () {
    return view('welcome');
});



// Nhập sản phẩm từ form
Route::get('addcategory','controllercategories@getForm');
Route::post('addcategory','controllercategories@postForm');

//Hiển thị categories
Route::get('view','controllercategories@selectCategory');

// Sửa sản phẩm
Route::get('modifi','controllercategories@getUpdate');
Route::post('modifi','controllercategories@postUpdate');


// Edit products
	Route::get('edit/{id}', [
		'as' 	=> 'getUpdate',//getUpdate: tên function
		'uses' 	=> 'controllercategories@getUpdate' 
		// tên controller@tên function get
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'postUpdate',
		'uses' 	=> 'controllercategories@postUpdate'
	]);
// ('edit/{id}': Liên quan đến đường dẫn trong flie selectCategories

// Xóa sản phẩm 
Route::get('delete/{id}','controllercategories@getDelete');