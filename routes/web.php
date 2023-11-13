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

Route::get('/ads/my-favs','App\Http\Controllers\FavAdsController@GetFavs')->name('favorites');
Route::get('ads/my-ads','App\Http\Controllers\GetAdsController@MyAds')->name('my-ads');

Route::get('/','App\Http\Controllers\GetAdsController@MainAds');
Route::get('/main','App\Http\Controllers\GetAdsController@MainAds')->name("main");
Route::get('register', 'App\Http\Controllers\UserController@SignupPage')->name('SignupPage');
Route::post('register', 'App\Http\Controllers\UserController@signup')->name('signup');
Route::get('login', 'App\Http\Controllers\UserController@LoginPage')->name('LoginPage');
Route::post('login','App\Http\Controllers\UserController@login')->name("login");
Route::get('post-ad/choose-category', 'App\Http\Controllers\PostAdController@MainCategoryPage')->middleware('auth')->name('CategoryPage');
Route::get('post-ad/{category}', 'App\Http\Controllers\PostAdController@ChooseMainCategory')->middleware('auth')->name('ad_page');
Route::post('post', 'App\Http\Controllers\PostAdController@PostAd')->name('PostAd');
Route::get('user/logout','App\Http\Controllers\UserController@logout')->name("logout");
Route::get('ads/{id}','App\Http\Controllers\GetAdsController@GetAd')->name("ad");
Route::get('search-location/{location}','App\Http\Controllers\SearchController@GetLocationsByAjax')->name("SearchByLocation");
Route::post('search-filters', 'App\Http\Controllers\SearchController@SearchFilters')->name('search');
Route::get('/{category}','App\Http\Controllers\GetAdsController@GetAdsByCateogry')->name('AdsByCateogry');
Route::get('/add-favs/{id}','App\Http\Controllers\FavAdsController@AddToFavs')->middleware('auth')->name('AddToFavs');
Route::get('update-ad/{id}','App\Http\Controllers\AdController@UpdatePage')->name('update_page');
Route::post('updated', 'App\Http\Controllers\AdController@UpdateAd')->name('update_ad');
Route::get('ad/delete/{id}','App\Http\Controllers\AdController@DeleteAd')->name('delete-ad');
Route::get('admin/dashboard','App\Http\Controllers\AdminController@dashboard')->middleware('can:isadmin,id')->middleware('auth')->name('dashboard');
Route::get('admin/dashboard/manage-users','App\Http\Controllers\AdminController@GetUsers')->middleware('can:isadmin,id')->name('manage-users');
Route::get('admin/dashboard/manage-admins','App\Http\Controllers\AdminController@GetAdmins')->middleware('can:isadmin,id')->name('manage-admins');
Route::get('admin/dashboard/manage-users/delete/{id}','App\Http\Controllers\AdminController@DeleteUser')->middleware('can:isadmin,id')->name('delete_user');
Route::get('user/profile/{id}','App\Http\Controllers\UserController@GetUser')->name('profile');
Route::get('ad/report/{id}','App\Http\Controllers\ReportController@ReportAd')->name('report');
Route::get('admin/reports','App\Http\Controllers\ReportController@GetReports')->middleware('can:isadmin,id')->middleware('auth')->name('mange_reports');










