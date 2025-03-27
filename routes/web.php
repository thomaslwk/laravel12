<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',
        [
            'jobs' => [
                [
                    'title' => 'Job 1',
                    'salary' => 10000
                ],
                [
                    'title' => 'Job 2',
                    'salary' => 20000
                ],
                [
                    'title' => 'Job 3',
                    'salary' => 30000
                ]
            ]
        ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
