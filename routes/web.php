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

route::get('/','FrontEndController@home');
route::get('what-we-do','FrontEndController@whatwedo');
route::get('who-we-are','FrontEndController@whoweare');
route::get('careers','FrontEndController@career');
route::get('contact-us','FrontEndController@contactus');

///dynamic page

route::get('{link}/{id}/@','DynamicController@lending_page');

Route::group([
    'prefix' => 'admin'
], function() {

    ///////////////////////dashboard
    Route::get('dashboard','BackendController@dashboard');
    
    //////////////////////slider-manahe
    Route::get('slider-menu','BackendController@slidermenu');
    Route::post('addslider','BackendController@addslider'); 
    Route::get('edit_slider/{id}','BackendController@edit_slider'); 
    Route::post('editslider','BackendController@editslider'); 
    Route::get('sliderdel','BackendController@sliderdel'); 

    //////////////////////what-we-do-manage
    Route::get('what-we-do','BackendController@whatwedo');
    Route::post('addwhatwedo','BackendController@addwhatwedo');
    Route::get('whatwedodel','BackendController@whatwedodel');
    Route::get('edit_whatwedo/{id}','BackendController@edit_whatwedo');
    Route::post('editwhatwedo','BackendController@editwhatwedo');
    Route::post('addpageheading','BackendController@addpageheading');
    
    //////////////////////pagemenu

    Route::get('page-menu','PageController@pagemenu');
    Route::get('addpage','PageController@addpage');
    Route::get('updatename','PageController@updatename');
    Route::get('activatepage','PageController@activatepage');
    Route::get('deactivatepage','PageController@deactivatepage');
    Route::get('deletepage','PageController@deletepage');
    Route::get('editpage/{id}','PageController@editpage');
    Route::get('pageupdate','PageController@pageupdate');

    //////////////////////Heders

    Route::get('header-manage','HeaderController@headermanage');
    Route::get('updateheaders','HeaderController@updateheaders');

  //////////////////////Pages

  Route::get('all-dynamic-pages','PageController@alldynamicpages');
  Route::get('page-create','PageController@pagecreate');
  Route::post('create-page-body','PageController@createpagebody');

});