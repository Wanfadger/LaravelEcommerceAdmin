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
    return redirect()->route('login');//  view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/////////////////////////
/**  Dashboard */
Route::get("/dashboard" , 'DashboardController@showDashboardPage')->name('dashboard.dashboard');


Route::get('/dashboard/roles' , 'RoleController@showRolesPage')->name('dashboard.roles');
Route::post("roles/save" , "RoleController@saveRole")->name("roles.save");
Route::delete("/roles/delete" , 'RoleController@deleteRole' )->name("roles.delete");

Route::get("/dashboard/categories" , 'CategoryController@showCategoriesPage')->name('dashboard.categories');
Route::post("categories/save" , "CategoryController@saveCategory")->name("categories.save");


Route::get("/dashboard/subcategories" , "SubCategoryController@showSubCategoriesPage")->name("dashboard.subcategories");
Route::post("subcategories/save" , "SubCategoryController@save")->name("subcategories.save");
Route::get("category/{id}/subcategories" , "SubCategoryController@getCatergorySubCategories")->name("category.subcategories");

Route::get("/dashboard/sizes" , "SizeController@showSizesPage")->name('dashboard.sizes');
Route::post("sizes/save" , "SizeController@saveSize")->name("sizes.save");

Route::get("/dashboard/colors", 'ColorController@showColorsPage')->name('dashboard.colors');
Route::post("/colors/save" , "ColorController@saveColor")->name("colors.save");

Route::get("/dashboard/product" , "ProductController@showProductsPage")->name('dashboard.products');
Route::get("/products/create" , "ProductController@createProductsPage")->name('products.create');
Route::post("/products/save" , "ProductController@saveProduct")->name("products.save");

Route::get("/dashboard/order" , "OrderController@showOrdersPage")->name('dashboard.orders');
Route::get("/orders/create" , "OrderController@createOrder")->name('orders.create');