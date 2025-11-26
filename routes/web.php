<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| AUTH (Login & Register)
|--------------------------------------------------------------------------
*/

// Login page
Route::get('/login', function () {
    return view('auth.login', ['title' => 'Login']);
})->name('login');

// Login process (dummy)
Route::post('/login', function (Request $request) {

    $username = $request->username;
    $password = $request->password;

    // Admin
    if ($username === 'admin' && $password === 'password') {
        return redirect()->route('admin.dashboard');
    }

    // Penduduk
    if ($username === 'penduduk' && $password === 'password') {
        return redirect()->route('user.dashboard');
    }

    return back()->with('error', 'Username atau password salah!');
})->name('login.process');

// Register page
Route::get('/register', function () {
    return view('auth.register', ['title' => 'Register']);
})->name('register');



// LOGOUT
Route::get('/logout', function () {
    return redirect()->route('login')->with('error', 'Anda telah logout.');
})->name('logout');

/*
|--------------------------------------------------------------------------
| USER (Penduduk)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('welcome', ['title' => 'Dashboard Penduduk']);
})->name('user.dashboard');




/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard', ['title' => 'Dashboard Admin']);
    })->name('dashboard');

    Route::get('/permohonan', function () {
        return 'Data Permohonan';
    })->name('permohonan');

    Route::get('/surat', function () {
        return 'Manajemen Surat';
    })->name('surat');

    Route::get('/rekap', function () {
        return 'Rekap Laporan';
    })->name('rekap');

    Route::get('/pengaturan', function () {
        return 'Pengaturan Akun';
    })->name('pengaturan');
});