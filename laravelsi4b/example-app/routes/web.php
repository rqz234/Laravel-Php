<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "Halaman About";
});

Route::get('profile', function () {
    return view("Profile");
});

// Route dengan parameter
Route::get('welcome/{salam}', function($salam) {
    // return 'Selamat '. $salam;
    return view('salam')->with('viewsalam', $salam);
});

// Route tanpa parameter listdata
// Terdapat array $list

Route::get('listdata', function(){
    $list = ["Sistem Informasi", "Informatika", "Manajemen"];
    $listmhs = [
        ["npm" => "001", "nama" => "ahmad"],
        ["npm" => "002", "nama" => "budi"],
        ["npm" => "003", "nama" => "donok"],
        ["npm" => "004", "nama" => "juan"]
    ];
    $listnpm = [ 
        ["npm" => "003", "nama" => "ahmad", "semester" => "3"],
        ["npm" => "003", "nama" => "ahmad", "semester" => "4"],
        ["npm" => "003", "nama" => "ahmad", "semester" => "5"],
        ["npm" => "003", "nama" => "ahmad", "semester" => "3"]
    ];

    return view('listprodi')
            ->with("viewlistprodi", $list)
            ->with("viewmhs", $listmhs)
            ->with("viewnpm", $listnpm);
}); 

Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('mahasiswa', MahasiswaController::class);

Route::get('dashboard', [DashboardController::class, 'index']);



// Route::get('malam', function($salam){
//     return 'Malam';
// });
