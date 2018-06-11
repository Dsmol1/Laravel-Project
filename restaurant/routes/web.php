<?php

Route::get('home','HomeController@index')->name('home');

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/dishes', 'DishController@index')->name('all.dishes');

Route::get('dishes/{dish}', 'DishController@show')->name('single.dish');

Route::post('/addToCart', 'ShoppingCartController@addToCart')->name('add.cart');

Route::get('/cart', 'ShoppingCartController@index')->name('show.cart');

Route::post('/cartDishDelete', 'ShoppingCartController@destroy')->name('cart.dish.delete');

Route::post('/addSingle', 'ShoppingCartController@deleteByOne')->name('deleteByOne');

Route::post('/reservation', 'ReservationController@store')->name('user.reservation');

Route::get('/checkout', 'OrderController@checkout')->name('order.checkout')->middleware('auth');

Route::get('/profile', 'UserController@showOrders')->name('user.profile')->middleware('auth');

Route::get('/profile/{order}', 'UserController@showOrderItems')->name('profileOrders.orderItems');


// Naujas cart su arturu
Route::get('/addDish/{dishId}', 'CartController@addItem')->name('addTo.cart');

Route::get('/cartArturas', 'CartController@showCart')->name('showNew.cart');

Route::delete('/cartDishDelete{cartItem}', 'CartController@destroy')->name('cartNew.dish.delete');

Route::get('/addDishAjax/{dishId}', 'CartController@addItemAjax')->name('addAjax.cart');



// Admin
Route::group(['middleware' => ['admin'], 'prefix'=>'admin'], function(){

  Route::get('/', 'AdminController@index')->name('admin.panel');

  // Show dishes
  Route::get('/dishes', 'DishController@admin')->name('admin.dishes');

  // Delete dish
  Route::delete('/dishes/{dish}', 'DishController@destroy')->name('delete.dish');

  // Create, add dish
  Route::get('/dishes/add', 'DishController@create')->name('create.dish');
  Route::post('/dishes', 'DishController@store')->name('add.dish');

  // Edit, update dish
  Route::get('/dishes/{dish}/edit', 'DishController@edit')->name('edit.dish');
  Route::put('/dishes/{dish}', 'DishController@update')->name('update.dish');

  // Show mains
  Route::resource('/mains', 'MainController');

  // Show users
  Route::resource('/users', 'UserController');

  // Show Admins
  Route::resource('/admins', 'AdminController');

  // Show reservations
  Route::resource('/reservations', 'ReservationController');

  // Show orders and items
  Route::get('/orders/orderItems/{order}', 'OrderController@showItems')->name('orders.orderItems');

  Route::put('/orders/orderItems/shipped/{order}', 'OrderController@shipped')->name('orders.shipped');

  Route::resource('/orders', 'OrderController');
});
