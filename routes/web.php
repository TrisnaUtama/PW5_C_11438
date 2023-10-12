<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;


    Route::get('/', function () {
        return view('Login');
    });
    
    Route::get('Login', function () {
        return view('Login');
    });

    Route::get('/dashboard', function () {
        return view('Dashboard');
    });

    Route::get('/presensi', function () {
        return view('Gyms/presensi',[
            'userData'  => [
                [
                'no' => 1,
                'nama' => 'Lionel Messi',
                'Email' => 'messi@gmail.com',
                'noTlp' => '0987654321',
                'metode_pembayaran' => 'Deposit Uang',
                'jenis_kartu' => 'Gold',
            ],
            [
                'no' => 2,
                'nama' => 'Krisna Ronaldo',
                'Email' => 'Krisna@gmail.com',
                'noTlp' => '09876523432',
                'metode_pembayaran' => 'Deposit Kelas',
                'jenis_kartu' => 'Silver',
            ],
            [
                'no' => 3,
                'nama' => 'Misut Ojil',
                'Email' => 'Ojil@gmail.com',
                'noTlp' => '0982344321',
                'metode_pembayaran' => 'Deposit Uang',
                'jenis_kartu' => 'Black',
            ],
            [
                'no' => 4,
                'nama' => 'Ronaldinhi',
                'Email' => 'ronaldi@gmail.com',
                'noTlp' => '0987123321',
                'metode_pembayaran' => 'Deposit Kelas',
                'jenis_kartu' => 'Silver',
            ],
            [
                'no' => 5,
                'nama' => 'Babayaga',
                'Email' => 'babayaga@gmail.com',
                'noTlp' => '09871235321',
                'metode_pembayaran' => 'Deposit Uang',
                'jenis_kartu' => 'Black',
            ],
            [
                'no' => 6,
                'nama' => 'Irfan Kurniawan',
                'Email' => 'Kurni@gmail.com',
                'noTlp' => '09126754321',
                'metode_pembayaran' => 'Deposit Kelas',
                'jenis_kartu' => 'Gold',
            ],
        ],

            'image' => 'https://thumb.viva.co.id/media/frontend/thumbs3/2021/03/26/605db3771a184-mia-khalifa_1265_711.jpg'
        ]);
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
        ],

        'pack1' =>[
            'jenis' => 'Kelas Regular',
            'minimal_pembelian' => 'Rp.3.000.000,00',
            'bonus' => 'Rp.300.000,00',
            'deskripsi' => 'Setiap deposit Rp. 3.000.000,00 mendapat bonus deposit RP. 300.00,00'
        ],
        'pack2' =>[
            'jenis' => 'Kelas Paket',
            'minimal_pembelian' => '5 Kelas',
            'bonus' => 'gratis 1 kelas',
            'deskripsi' => 'Bayar 5 sesi, gratis 1. Berlaku 1 bulan sejak pembayaran'
        ],
        'pack3' =>[
            'jenis' => 'Kelas Paket',
            'minimal_pembelian' => '10 Kelas',
            'bonus' => 'gratis 3 kelas',
            'deskripsi' => 'Bayar 10 sesi, gratis 3. Berlaku 2 bulan sejak pembayaran'
        ],
    ]
    
    );
    });

