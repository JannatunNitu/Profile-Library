<?php

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/upload',function(){
//    return view('admin.profile.admin_profile');
// });
Route::put('/profile_imgUpload',[ProfileController::class,'imgUpload'])->name('profile.img.Upload');

//admin profile route
Route::get('/profile',[ProfileController::class, 'admin_profile'])->name('admin_profile');
// update
Route::put('/profile-update',[ProfileController::class, 'updateProfile'])->name('profile.update');
// PASSWORD UPDATE
Route::put('/password_update', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

