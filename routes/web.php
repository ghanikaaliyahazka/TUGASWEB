<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassRoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/student',[StudentController::class,'index']);
Route::get('/class',[ClassRoomController::class,'index']);


//Memanggil tampilan contact
Route::get('/nama', function(){
    return 'oi';
});

Route::get('tambah', function (){
    return 5 + 5;
});

Route::get('kurang', function (){
    return 70 - 5;
});

Route::get('kali', function (){
    return 5 * 5;
});

// Memanggil tampilan contact
Route::get('contact', function (){
    return view('contact', [
        'namasiswa' => 'Ghanika',
        'kelas' => '12rplc',
        'alamat' => 'Bandung',
        'notlp' => '08023755',
    ]);
});

Route::get('product/{id}', function($id){
    $products = [
        [
            'id' => 1,
            'nama_produk' => 'apple 15 pro',
            'hargabarang' => 30000,
            'stok' => 2000
        ],
        [
            'id' => 2,
            'nama_produk' => 'apple 14 pro',
            'hargabarang' => 30000,
            'stok' => 2000
        ],
        [
            'id' => 3,
            'nama_produk' => 'apple 13 pro',
            'hargabarang' => 30000,
            'stok' => 2000
        ],
        [
            'id' => 4,
            'nama_produk' => 'apple 17 pro',
            'hargabarang' => 30000,
            'stok' => 2000
        ]
    ];
  dd($products);
  die;
    $cari_product = collect($products)->where('id', $id)->first();
    return view('product.detail', [
        'data' => $cari_product
    ]);
});

// Route untuk siswa
Route::get('siswa/{nis}', function($nis){
    $siswa = [
        [
            'nis' => 1101,
            'nama_siswa' => 'Ghanika',
            'jurusan' => 'rpl',
            'tingkat' => 12,
            'ekskul' => 'Badminton',
        ],
        [
            'nis' => 1102,
            'nama_siswa' => 'Aliya',
            'jurusan' => 'rpl',
            'tingkat' => 12,
            'ekskul' => 'Paskibra',
        ],
        [
            'nis' => 1103,
            'nama_siswa' => 'Syahna',
            'jurusan' => 'eind',
            'tingkat' => 11,
            'ekskul' => 'Nari',
        ],
        [
            'nis' => 1104,
            'nama_siswa' => 'Akbar',
            'jurusan' => 'tptu',
            'tingkat' => 10,
            'ekskul' => 'Futsal',
        ]
    ];
dd($siswa);
  die;
    $cari_siswa = collect($siswa)->where('nis', $nis)->first();
    return view('siswa.siswa', [
        'data' => $cari_siswa
    ]);
});


Route::get('/home', function(){
    $siswa = [
        [
            'nis' => 1101,
            'nama_siswa' => 'Ghanika',
            'jurusan' => 'rpl',
            'tingkat' => 12,
            'ekskul' => 'Badminton',
        ],
        [
            'nis' => 1102,
            'nama_siswa' => 'Aliya',
            'jurusan' => 'rpl',
            'tingkat' => 12,
            'ekskul' => 'Paskibra',
        ],
        [
            'nis' => 1103,
            'nama_siswa' => 'Syahna',
            'jurusan' => 'eind',
            'tingkat' => 11,
            'ekskul' => 'basket',
        ],
        [
            'nis' => 1104,
            'nama_siswa' => 'Akbar',
            'jurusan' => 'tptu',
            'tingkat' => 10,
            'ekskul' => 'Futsal',
        ]
    ];

    return view('home',[
        'nama' => 'Ghanika Aliyah',
        'role' => 'admin',
        'data' => $siswa
    ]);
});
