<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
        return view('Login');
    });

    Route::get('/dashboard', function () {
        return view('Dashboard');
    });

    Route::get('/gyms', function () {
        return view('Gyms/index', [
        'kelas' => [
        [
        'no' => 1,
        "gambar" => "https://northygym.com.au/wp-content/uploads/2019/05/bodycombat-1024x683.jpg",
        "nama" => "Body Combat",
        'instruktur' => 'Jolly',
        'ruang' => 'Kelas A',
        'rating' => '5'
        ],
        [
        'no' => 2,
        'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT946WtzckkOtK1FuqTDmjA6mA38EhBeOttbw&usqp=CAU',
        'nama' => 'Bungee ',
        'instruktur' => 'Agung',
        'ruang' => 'Kelas B',
        'rating' => '3',
        ],
        [ 'no' => 3,
        'gambar' => 'https://cdn.webshopapp.com/shops/27662/files/362076546/yoga-versus-pilates.jpg',
        'nama' => 'Yogalates ',
        'instruktur' => 'Raka',
        'ruang' => 'Kelas C',
        'rating' => '4',
        ],
        [
        'no' => 4,
        'gambar' =>
        'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
        'nama' => 'Boxing ',
        'instruktur' => 'Tebri',
        'ruang' => 'Kelas D',
        'rating' => '5',
        ]
        ]
        ]);
    });