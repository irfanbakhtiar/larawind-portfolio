<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardProjectController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardAccountController;
use App\Models\Categories;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomePageController;

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

//HOMEPAGE
Route::get('/', [HomePageController::class, 'index']);

Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/{projects:slug}', [ProjectsController::class, 'show']);
Route::get('/author/{author:username}', [ProjectsController::class, 'author']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category',
        'active' => 'categories',
        'categories' => Categories::all()
    ]);
});

//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

//CHECK-SLUG
Route::get('/dashboard/project/checkSlug', [DashboardProjectController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/category/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');

//ADMIN-DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//ADMIN-PROJECT
Route::resource('/dashboard/project/', DashboardProjectController::class)->except([
    'show', 'destroy', 'edit', 'update'
])->middleware('auth');
Route::delete('/dashboard/project/{project:slug}', [DashboardProjectController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/project/{project:slug}', [DashboardProjectController::class, 'show'])->middleware('auth');
Route::get('/dashboard/project/{project:slug}/edit', [DashboardProjectController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/project/{project:slug}', [DashboardProjectController::class, 'update'])->middleware('auth');

//ADMIN-CATEGORY
Route::resource('/dashboard/category', DashboardCategoryController::class)->except([
    'destroy', 'edit', 'update'
])->middleware('auth');
Route::delete('/dashboard/category/{categories:slug}', [DashboardCategoryController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/category/{categories:slug}/edit', [DashboardCategoryController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/category/{categories:slug}', [DashboardCategoryController::class, 'update'])->middleware('auth');

//ADMIN-ACCOUNT
Route::resource('/dashboard/account/', DashboardAccountController::class)->except([
    'edit', 'update'
])->middleware('auth');
Route::get('/dashboard/account/{user:id}/edit', [DashboardAccountController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/account/{user:id}', [DashboardAccountController::class, 'update'])->middleware('auth');

//ADMIN-CHANGE-PASS
Route::get('/dashboard/account/change-password', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/dashboard/account/change-password', [ChangePasswordController::class, 'store'])->middleware('auth');
