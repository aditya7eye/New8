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

Route::get('/', 'FrontEndController@home');
Route::get('what-we-do', 'FrontEndController@whatwedo');
Route::get('who-we-are', 'FrontEndController@whoweare');
Route::get('careers', 'FrontEndController@career');
Route::get('contact-us', 'FrontEndController@contactus');
Route::post('store_enq', 'FrontEndController@store_enq');

///dynamic page

route::get('{link}/{id}/@', 'DynamicController@lending_page');


///

Route::get('/access', 'LoginController@loginpage');
Route::get('logout', 'LoginController@logout');
Route::get('logincheck', 'LoginController@logincheck');

Route::group(['middleware' => 'usersession'], function () {

    Route::group([
        'prefix' => 'admin'
    ], function () {

        ///////////////////////dashboard
        Route::get('dashboard', 'BackendController@dashboard');

        //////////////////////slider-manahe
        Route::get('slider-menu', 'BackendController@slidermenu');
        Route::post('addslider', 'BackendController@addslider');
        Route::get('edit_slider/{id}', 'BackendController@edit_slider');
        Route::post('editslider', 'BackendController@editslider');
        Route::get('sliderdel', 'BackendController@sliderdel');

        //////////////////////what-we-do-manage
        Route::get('what-we-do', 'BackendController@whatwedo');
        Route::post('addwhatwedo', 'BackendController@addwhatwedo');
        Route::get('whatwedodel', 'BackendController@whatwedodel');
        Route::get('edit_whatwedo/{id}', 'BackendController@edit_whatwedo');
        Route::post('editwhatwedo', 'BackendController@editwhatwedo');
        Route::post('addpageheading', 'BackendController@addpageheading');

        //////////////////////pagemenu

        Route::get('page-menu', 'PageController@pagemenu');
        Route::get('addpage', 'PageController@addpage');
        Route::get('updatename', 'PageController@updatename');
        Route::get('activatepage', 'PageController@activatepage');
        Route::get('deactivatepage', 'PageController@deactivatepage');
        Route::get('deletepage', 'PageController@deletepage');
        Route::get('edit-menu/{id}', 'PageController@editmenu');
        Route::get('pageupdate', 'PageController@pageupdate');
        Route::get('pagedd', 'PageController@pagedd');

        //////////////////////Heders

        Route::get('header-manage', 'HeaderController@headermanage');
        Route::get('updateheaders', 'HeaderController@updateheaders');

        //////////////////////Pages

        Route::get('all-dynamic-pages', 'PageController@alldynamicpages');
        Route::get('page-create', 'PageController@pagecreate');
        Route::post('create-page-body', 'PageController@createpagebody');
        Route::get('page-edit/{id}', 'PageController@pageedit');
        Route::post('update-page-body', 'PageController@updatepagebody');

        ///////////////////Happy-client

        Route::get('happy-client', 'ClientController@happyclient');
        Route::post('storeclient', 'ClientController@addclient');
        Route::get('client-list', 'ClientController@clientlist');


        //////////////////////Success Year
        Route::get('success_story', 'BackendController@success_stories');
        Route::get('success-story-create', 'BackendController@success_story_create');
        Route::post('store_success_story', 'BackendController@store_success_story');
        Route::get('success_story-edit/{id}', 'BackendController@success_story_edit');
        Route::post('update-success_story', 'BackendController@storyupdate');
        Route::get('deactivatestory', 'BackendController@deactivatestory');
        Route::get('activatestory', 'BackendController@activatestory');

        //////////////////////Success Year
        Route::get('success_year', 'BackendController@success_years');
        Route::get('success-year-create', 'BackendController@success_year_create');
        Route::post('store_success_year', 'BackendController@store_success_year');
        Route::get('success_year-edit/{id}', 'BackendController@success_year_edit');
        Route::post('update-success_year', 'BackendController@yearupdate');
        Route::get('deactivateyear', 'BackendController@deactivateyear');
        Route::get('activateyear', 'BackendController@activateyear');

        //////////////////////Pages

        Route::get('team', 'BackendController@team');
        Route::get('team-create', 'BackendController@teamcreate');
        Route::post('create-team', 'BackendController@storeteam');
        Route::get('team-edit/{id}', 'BackendController@teamedit');
        Route::post('update-team', 'BackendController@updateteam');




    });
});
