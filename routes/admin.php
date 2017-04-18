<?php

    // your CRUD resources and other admin routes here
    CRUD::resource('report', 'ReportCrudController');

    Route::get('dashboard', 'DashboardController@index');
