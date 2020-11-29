<?php


//Route for admin


Route::get('/','adminController@index')->name('admin.index');



//Route for logo
Route::get('/admin/logo/manage','logoController@index')->name('logo.index');
Route::post('/admin/logo/store','logoController@store')->name('logo.store');
Route::get('/admin/logo/destroy/{id}','logoController@destroy')->name('logo.destroy');
Route::post('/admin/logo/update/{id}','logoController@update')->name('logo.update');

//Route for Categories
Route::get('/admin/categories/add','categoriesController@add')->name('categories.add');
Route::get('/admin/categories/manage','subCategoryController@manage')->name('categories.manage');
Route::post('/admin/categories/store','categoriesController@store')->name('categories.store');
Route::get('/admin/categories/destroy/{id}','categoriesController@destroy')->name('categories.destroy');
Route::post('/admin/categories/update/{id}','categoriesController@update')->name('categories.update');

//Route for Menu
Route::get('/admin/menu/manage','menuController@index')->name('menu.index');
Route::post('/admin/menu/store','menuController@store')->name('menu.store');
Route::get('/admin/menu/destroy/{id}','menuController@destroy')->name('menu.destroy');
Route::post('/admin/menu/update/{id}','menuController@update')->name('menu.update');


//Route for SubMenu
Route::get('/admin/submenu/manage','subMenuController@index')->name('submenu.index');
Route::post('/admin/submenu/store','subMenuController@store')->name('submenu.store');
Route::get('/admin/submenu/destroy/{id}','subMenuController@destroy')->name('submenu.destroy');
Route::post('/admin/submenu/update/{id}','subMenuController@update')->name('submenu.update');

//Route for Slider
Route::get('/admin/slider/manage','sliderController@index')->name('slider.index');
Route::post('/admin/slider/store','sliderController@store')->name('slider.store');
Route::get('/admin/slider/destroy/{id}','sliderController@destroy')->name('slider.destroy');
Route::post('/admin/slider/update/{id}','sliderController@update')->name('slider.update');


//Route for Products
Route::get('/admin/products/add','productController@add')->name('product.add');
Route::get('/admin/products/manage','productController@manage')->name('product.manage');
Route::post('/admin/products/store','productController@store')->name('products.store');
Route::get('/admin/products/destroy/{id}','productController@destroy')->name('products.destroy');
Route::post('/admin/products/update/{id}','productController@update')->name('products.update');

//Route for Blog
Route::get('/admin/blog/add','blogController@add')->name('blog.add');
Route::post('/admin/blog/store','blogController@store')->name('blog.store');
Route::get('/admin/blog/destroy/{id}','blogController@destroy')->name('blog.destroy');
Route::post('/admin/blog/update/{id}','blogController@update')->name('blog.update');


//Route for Contact Us
Route::get('/admin/contact/add','contactController@index')->name('contact.index');
Route::post('/admin/contact/store','contactController@store')->name('contact.store');
Route::get('/admin/contact/destroy/{id}','contactController@destroy')->name('contact.destroy');
Route::post('/admin/contact/update/{id}','contactController@update')->name('contact.update');



//Route for Frontend
Route::get('/website','websiteController@index')->name('front.index');
Route::get('/front/about','websiteController@about')->name('front.about');
Route::get('/front/contact','websiteController@contact')->name('front.contact');
Route::get('/front/collection','websiteController@collection')->name('front.collection');
Route::get('/front/products','websiteController@product')->name('front.products');

//Route for Frontend
Route::get('/log','loginController@index')->name('login.login');






