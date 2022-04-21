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



Auth::routes();

Route::get("/", "HomeController@home");

Route::get("/posts", "PostsController@all");

Route::get("/users", "UsersController@all");

Route::get("/categories", "CategoriesController@all");

Route::get("/user/{id}", "UsersController@detail")->name("views/user");

Route::get("/post/{id}", "PostsController@detail")->name("post/detail");

Route::get("/search", "UsersController@search");

Route::get("/posts/add", "PostsController@add")->middleware("auth")->name("posts/add");

Route::post("/posts/add", "PostsController@store")->middleware("auth");

Route::post("/posts/delete", "PostsController@delete")->middleware("auth");




// Rutas CRUD
// Ruta Dashboard
Route::get('admin/dashboard', 'Dashboard@index')->name('admin/dashboard');

/***** USUARIOS ********/
/* Crear Usuarios */
Route::get('admin/users/crear', 'AdminController@crear')->name('admin/users/crear');
Route::put('admin/users/store', 'AdminController@store')->name('admin/users/store');

/* Leer Usuarios */
Route::get('admin/users', 'AdminController@index')->name('admin/users');

/* Actualizar Usuarios */
Route::get('admin/users/actualizar/{id}', 'AdminController@actualizar')->name('admin/users/actualizar');
Route::put('admin/users/update/{id}', 'AdminController@update')->name('admin/users/update');

/* Eliminar Usuario */
Route::put('admin/users/eliminar/{id}', 'AdminController@eliminar')->name('admin/users/eliminar');


/***** POSTEOS ********/
/* Crear Posteos */
Route::get('admin/posts/crear', 'AdminController@crearPost')->name('admin/posts/crear');
Route::put('admin/posts/store', 'AdminController@storePost')->name('admin/posts/store');


/* Leer Posteos */
Route::get('admin/posts', 'AdminController@indexPost')->name('admin/posts');

/* Actualizar Posteos */
Route::get('admin/posts/actualizarPost/{id}', 'AdminController@actualizarPost')->name('admin/posts/actualizar');
Route::put('admin/posts/update/{id}', 'AdminController@updatePost')->name('admin/posts/update');

/* Eliminar Posteos */
Route::put('admin/posts/eliminar/{id}', 'adminController@eliminarPost')->name('admin/posts/eliminar');




/* Ruta administador */
Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('admin/dashboard', 'Dashboard@admin')->name('admin/dashboard');
});




//FOLLOWERS FOLLOW RUTESSSS
Route::get('/profile/{profileId}/follow', 'ProfileController@followUser')->name('user.follow')->middleware("auth");

Route::get('/{profileId}/unfollow', 'ProfileController@unFollowUser')->name('user.unfollow')->middleware("auth");






