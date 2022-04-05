<?php

use App\Admin\Controllers\CategoryController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/categories',CategoryController::class);
    $router->resource('/students',UserController::class);
    $router->resource('/exams',ExamController::class);
    $router->resource('/courses',CourseController::class);
    $router->resource('/Revisions',RevisionController::class);

});
