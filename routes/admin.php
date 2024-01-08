<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\WorkersController;
use App\Http\Controllers\Admin\NationalitiesController;
use App\Http\Controllers\Admin\WorkersArchivesController;
use App\Http\Controllers\Admin\UserArchivesController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\NationalityProcessStepController;
use App\Http\Controllers\Admin\OrdersArchivesController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\Admin\ReportsController;


Route::controller(AuthController::class)->withoutMiddleware(['auth:admin'])->group(function () {
    Route::get('login', 'showLoginForm')->name('login.form');
    Route::post('login', 'authenticate')->name('login.submit');
    Route::get('logout', 'logout')->name('login.logout');
});

Route::get('/', [DashboardController::class, 'home'])->name('dashboard.home');
Route::get('/notifications', [DashboardController::class, 'notifications'])->name('dashboard.notifications');
Route::get('/send-notifications', [DashboardController::class, 'notificationsForm'])->name('dashboard.notifications_form');
Route::post('/send-notifications', [DashboardController::class, 'sendNotifications'])->name('dashboard.send_notification');
Route::get('/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
Route::get('/locale/{locale?}', [DashboardController::class, 'setLocale'])->name('locale');


Route::controller(RolesController::class)->prefix('roles')->name('roles.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{role_id}/edit', 'edit')->name('edit');
    Route::post('/{role_id}/update', 'update')->name('update');
});

Route::controller(AdminController::class)->prefix('system/users')->name('system.users.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{system_user_id}/edit', 'edit')->name('edit');
    Route::post('/{system_user_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});


Route::controller(CategoriesController::class)->prefix('categories')->name('categories.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{category_id}/edit', 'edit')->name('edit');
    Route::post('/{category_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(TagsController::class)->prefix('tags')->name('tags.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{tag_id}/edit', 'edit')->name('edit');
    Route::post('/{tag_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(WorkersController::class)->prefix('workers')->name('workers.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{worker_id}', 'show')->name('show');
    Route::get('/{worker_id}/edit', 'edit')->name('edit');
    Route::get('/{worker_id}/download', 'downloadWorkerInfo')->name('download');
    Route::post('/{worker_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(WorkersArchivesController::class)->prefix('workers-archive')->name('workers_archives.')->group(function () {
    Route::get('{worker_id}/list', 'show')->name('index');
    Route::get('worker/{worker_id}/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('worker/{worker_id}/archive/{worker_archive_id}/edit', 'edit')->name('edit');
    Route::post('/{worker_archive_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(UsersController::class)->prefix('users')->name('users.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{user_id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::get('/{user_id}/edit', 'edit')->name('edit');
    Route::post('/{user_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(UserArchivesController::class)->prefix('users-archive')->name('users_archives.')->group(function () {
    Route::get('{user_id}/list', 'show')->name('index');
    Route::get('user/{user_id}/create', 'create')->name('create');
    Route::post('{user_id}/store', 'store')->name('store');
    Route::get('user/{user_id}/archive/{user_archive_id}/edit', 'edit')->name('edit');
    Route::post('/{user_archive_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(NationalitiesController::class)->prefix('nationalities')->name('nationalities.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{nationality_id}', 'show')->name('show');
    Route::get('/{nationality_id}/edit', 'edit')->name('edit');
    Route::post('/{nationality_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(CountriesController::class)->prefix('countries')->name('countries.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{country_id}', 'show')->name('show');
    Route::get('/{country_id}/edit', 'edit')->name('edit');
    Route::post('/{country_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(OrdersController::class)->prefix('orders')->name('orders.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('{order_id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::get('/{order_id}/edit', 'edit')->name('edit');
    Route::post('/{order_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(OrdersArchivesController::class)->prefix('orders-archive')->name('orders_archives.')->group(function () {
    Route::get('{order_id}/list', 'show')->name('index');
    Route::get('order/{order_id}/create', 'create')->name('create');
    Route::post('{order_id}/store', 'store')->name('store');
    Route::get('order/{order_id}/archive/{orders_archive_id}/edit', 'edit')->name('edit');
    Route::post('/{orders_archive_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});


Route::controller(NationalityProcessStepController::class)->prefix('nationality-process-steps')->name('nationality_process_steps.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{nationality_process_step_id}/edit', 'edit')->name('edit');
    Route::post('/{nationality_process_step_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(PagesController::class)->prefix('pages')->name('pages.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{page_id}/edit', 'edit')->name('edit');
    Route::post('/{page_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});


Route::controller(ContactsController::class)->prefix('contacts')->name('contacts.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/reply/{contact_id}', 'reply')->name('reply');
    Route::get('/{contact_id}/edit', 'edit')->name('edit');
    Route::get('/{contact_id}', 'show')->name('show');
    Route::post('/{contact_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});

Route::controller(SliderController::class)->prefix('slider')->name('slider.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{slider_id}/edit', 'edit')->name('edit');
    Route::post('/{slider_id}/update', 'update')->name('update');
    Route::get('/delete', 'destroy')->name('destroy');
});
Route::controller(SettingsController::class)->prefix('settings')->name('settings.')->group(function () {
    Route::get('admin', 'adminIndex')->name('admin.index');
    Route::post('admin', 'saveAdminSettings')->name('save-admin-settings');

    Route::get('app', 'appIndex')->name('app.index');
    Route::post('app', 'saveAppSettings')->name('save-app-settings');
});

Route::controller(ReportsController::class)->prefix('reports')->name('reports.')->group(function () {
    Route::get('orders', 'orders')->name('reports.orders');
    Route::get('clients', 'clients')->name('reports.clients');
    Route::get('top-workers', 'topWorkers')->name('reports.top_workers');
});


Route::group(['prefix' => 'activity', 'namespace' => 'jeremykenedy\LaravelLogger\App\Http\Controllers'], function () {

    // Dashboards
    Route::get('/', 'LaravelLoggerController@showAccessLog')->name('activity');
    Route::get('/cleared', ['uses' => 'LaravelLoggerController@showClearedActivityLog'])->name('cleared');

    // Drill Downs
    Route::get('/log/{id}', 'LaravelLoggerController@showAccessLogEntry');
    Route::get('/cleared/log/{id}', 'LaravelLoggerController@showClearedAccessLogEntry');

    // Forms
    Route::delete('/clear-activity', ['uses' => 'LaravelLoggerController@clearActivityLog'])->name('clear-activity');
    Route::delete('/destroy-activity', ['uses' => 'LaravelLoggerController@destroyActivityLog'])->name('destroy-activity');
    Route::post('/restore-log', ['uses' => 'LaravelLoggerController@restoreClearedActivityLog'])->name('restore-activity');
});


