<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


define('DEFAULT_VERSION', 'v1');

/**
 * Convert some text to Markdown...
 */
// function markdown($text) {
// 	return (new ParsedownExtra)->text($text);
// }

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index',
]);


/*
|-------------------------------
| Gallery
|-------------------------------
*/
Route::get('/gallery', ['uses' => 'DemosController@index', 'as' => 'gallery.index']);
Route::get('/gallery/{id}', ['uses' => 'DemosController@show', 'as' => 'gallery.show']);
Route::get('/gallery/{id}/edit', ['uses' => 'DemosController@edit', 'as' => 'gallery.edit']);
Route::get('/gallery/{id}/delete', ['uses' => 'DemosController@destroy', 'as' => 'gallery.delete']);


/*
|-------------------------------
| Docs
|-------------------------------
*/
Route::get('/docs/merged-doc', ['uses' => 'DocumentationController@showMergedDocs']);
Route::get('/docs', ['uses' => 'DocumentationController@showRootpage', 'as' => 'documentation']);
Route::get('/docs/{version}/{page?}', ['uses' => 'DocumentationController@show', 'as' => 'documentation']);


/*
|-------------------------------
| Paste
|-------------------------------
*/
Route::get('/paste', ['uses' => 'PasteController@create', 'as' => 'pastes.create']);
Route::post('/paste', ['uses' => 'PasteController@store', 'as' => 'pastes.store']);
Route::get('/paste/{any}', ['uses' => 'PasteController@show', 'as' => 'pastes.show']);
Route::get('/paste/{any}/raw', ['uses' => 'PasteController@raw', 'as' => 'pastes.raw']);

/*
|-------------------------------
| Blog
|-------------------------------
*/
Route::get('/blog', ['uses' => 'ArticlesController@index', 'as' => 'articles.index']);
Route::get('/blog/{slug}', ['uses' => 'ArticlesController@show', 'as' => 'articles.show']);


/*
|-------------------------------
| Proxy
|-------------------------------
*/
Route::get('/proxy', 'ProxyController@get');
Route::get('/proxy/test', function() {
	return redirect('/proxy?url=https%3A%2F%2Fapi.github.com%2Frepos%2Fseblavoie%2Fesy%2Freleases');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
