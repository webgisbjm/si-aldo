<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'api.', 'namespace' => 'Api'], function () {

    Route::get('builds', 'BuildController@index')->name('builds.index');
    Route::get('nsups', 'NsupController@index')->name('nsups.index');
    Route::get('ipals', 'IpalController@index')->name('ipals.index');
});
