<?php

use App\User;
use App\Admin;
use App\UserNotification;
use App\AdminNotification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Notifications\UserNotification as NotificationsUserNotification;
use App\Notifications\AdminNotification as NotificationsAdminNotification;

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
    $users = User::oldest()->get();
    $admins = Admin::oldest()->get();
    return view('welcome', ['users' => $users, 'admins' => $admins]);
});

Route::get('/users/{user}', function (User $user) {
    return view('users.index', ['user' => $user]);
});
Route::get('/users/{user}/notifications', function (User $user) {
    $notifications = $user->notifications()->latest()->get();
    return view('users.notifications.index', ['user' => $user, 'notifications' => $notifications]);
});
Route::post('/users/{user}/notifications', function (User $user) {
    $notification = factory(UserNotification::class)->make();
    $user->notifications()->save($notification);
    return redirect("/users/{$user->id}/notifications");
});
Route::post('/users/{user}/notify', function (User $user) {
    $user->notify(new NotificationsUserNotification());
    return redirect("/users/{$user->id}/notifications");
});
Route::delete('/users/{user}/notifications', function (User $user) {
    $user->notifications()->delete();
    return redirect("/users/{$user->id}/notifications");
});

Route::get('/admins/{admin}', function (Admin $admin) {
    return view('admins.index', ['admin' => $admin]);
});
Route::get('/admins/{admin}/notifications', function (Admin $admin) {
    $notifications = $admin->notifications()->latest()->get();
    return view('admins.notifications.index', ['admin' => $admin, 'notifications' => $notifications]);
});
Route::post('/admins/{admin}/notifications', function (Admin $admin) {
    $notification = factory(AdminNotification::class)->make();
    $admin->notifications()->save($notification);
    return redirect("/admins/{$admin->id}/notifications");
});
Route::post('/admins/{admin}/notify', function (Admin $admin) {
    $admin->notify(new NotificationsAdminNotification());
    return redirect("/admins/{$admin->id}/notifications");
});
Route::delete('/admins/{admin}/notifications', function (Admin $admin) {
    $admin->notifications()->delete();
    return redirect("/admins/{$admin->id}/notifications");
});
