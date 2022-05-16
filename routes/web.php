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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, '__invoke']);
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, '__invoke'])->name('admin.main.index');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Post\IndexController::class, '__invoke'])->name('admin.post.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Post\CreateController::class, 'create'])->name('admin.post.create');
        Route::post('/', [\App\Http\Controllers\Admin\Post\StoreController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}', [\App\Http\Controllers\Admin\Post\ShowController::class, 'show'])->name('admin.post.show');
        Route::get('/{post}/edit', [\App\Http\Controllers\Admin\Post\EditController::class, 'edit'])->name('admin.post.edit');
        Route::post('/{post}', [\App\Http\Controllers\Admin\Post\UpdateController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}', [\App\Http\Controllers\Admin\Post\DeleteController::class, 'delete'])->name('admin.post.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Category\CreateController::class, 'create'])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\Category\StoreController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [\App\Http\Controllers\Admin\Category\ShowController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, 'edit'])->name('admin.category.edit');
        Route::post('/{category}', [\App\Http\Controllers\Admin\Category\UpdateController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\Category\DeleteController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Tag\IndexController::class, '__invoke'])->name('admin.tag.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Tag\CreateController::class, 'create'])->name('admin.tag.create');
        Route::post('/', [\App\Http\Controllers\Admin\Tag\StoreController::class, 'store'])->name('admin.tag.store');
        Route::get('/{tag}', [\App\Http\Controllers\Admin\Tag\ShowController::class, 'show'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [\App\Http\Controllers\Admin\Tag\EditController::class, 'edit'])->name('admin.tag.edit');
        Route::post('/{tag}', [\App\Http\Controllers\Admin\Tag\UpdateController::class, 'update'])->name('admin.tag.update');
        Route::delete('/{tag}', [\App\Http\Controllers\Admin\Tag\DeleteController::class, 'delete'])->name('admin.tag.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\User\IndexController::class, '__invoke'])->name('admin.user.index');
        Route::get('/create', [\App\Http\Controllers\Admin\User\CreateController::class, 'create'])->name('admin.user.create');
        Route::post('/', [\App\Http\Controllers\Admin\User\StoreController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [\App\Http\Controllers\Admin\User\ShowController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [\App\Http\Controllers\Admin\User\EditController::class, 'edit'])->name('admin.user.edit');
        Route::post('/{user}', [\App\Http\Controllers\Admin\User\UpdateController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}', [\App\Http\Controllers\Admin\User\DeleteController::class, 'delete'])->name('admin.user.delete');
    });
});

Auth::routes(['verify' => true]);
