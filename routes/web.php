<?php

use App\Http\Controllers\Admin\AuthController;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Undian;
use App\Models\UndianGrandprice;
use App\Models\PesertaUmum;
use App\Models\PesertaUmumLima;
use App\Models\PesertaGrandPrice;
use App\Models\PemenangUndianUmum;
use App\Models\PemenangUndianUmumLima;
use App\Models\PemenangUndianGrandprice;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PesertaUmumController;
use App\Http\Controllers\Admin\PesertaUmumLimaController;
use App\Http\Controllers\Admin\PesertaGrandpriceController;
use App\Http\Controllers\Admin\PemenangUndianUmumController;
use App\Http\Controllers\Admin\PemenangUndianUmumLimaController;
use App\Http\Controllers\Admin\PemenangUndianGrandpriceController;
use App\Models\UndianUmumLima;

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
    return view('contents.undian.index');
});

// Tambahkan rute baru di sini
Route::get('/grandprice', function () {
    return view('contents.undian.grandprice');
});

// Tambahkan rute baru di sini
Route::get('/cover', function () {
    return view('contents.undian.cover');
});

// Tambahkan rute baru di sini
Route::get('/lima', function () {
    return view('contents.undian.lima');
});


Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('validation', [AuthController::class, 'validation'])->name('validation');
});

Route::name('admin.')->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    // Bagian Peserta Umum
    Route::post('peserta-umum/import', [PesertaUmumController::class, 'importFile'])->name('peserta-umum.import');
    Route::resource('peserta-umum', PesertaUmumController::class);
    Route::resource('pemenang-undian-umum', PemenangUndianUmumController::class);
    // Bagian Peserta Grand Price
    Route::post('peserta-grandprice/import', [PesertaGrandPriceController::class, 'importFile'])->name('peserta-grandprice.import');
    Route::resource('peserta-grandprice', PesertaGrandPriceController::class);
    Route::resource('pemenang-undian-grandprice', PemenangUndianGrandPriceController::class);
    // Bagian Peserta Umum Lima
    Route::post('peserta-umum-lima/import', [PesertaUmumLimaController::class, 'importFile'])->name('peserta-umum-lima.import');
    Route::resource('peserta-umum-lima', PesertaUmumLimaController::class);
    Route::resource('pemenang-undian-umum-lima', PemenangUndianUmumLimaController::class);
});

// Global Route

// Bagian Peserta Umum
// Route::post('peserta-undian', function () {
//     $peserta = Undian::inRandomOrder()->take(1)->first();
//     return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
// })->name('peserta-undian');
Route::post('peserta-undian', function () {
    $peserta = Undian::whereHas('pesertaUmum', function($q){
        $q->where('status', 0);
    })->inRandomOrder()->take(1)->first(); // Mengambil 1 peserta secara acak
    return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
})->name('peserta-undian');

Route::post('nomor-undian-umum', function (Request $request) {
    $nomorundian = Undian::orderBy('nomor_undian', 'ASC')->where('peserta_umum_id', $request->peserta_umum_id)->get();
    return response()->json(['message' => 'nomor undian peserta ditemukan', 'nomorundian' => $nomorundian], Response::HTTP_OK);
})->name('nomor-undian-umum');

Route::post('pemenang-undian-umum', function () {
    $undianumum = PemenangUndianUmum::with('undian')->orderBy('created_at', 'DESC')->get();
    return response()->json(['message' => 'pemenang undian umum ditemukan', 'undianumum' => $undianumum], Response::HTTP_OK);
})->name('pemenang-undian-umum');

Route::post('pemenang-undian-umum/store', function (Request $request) {
    PemenangUndianUmum::create([
        'id' => Str::uuid(),
        'undian_id' => $request->undian_id
    ]);

    $undian = Undian::find($request->undian_id);
    if (!empty($undian)) {
        // Get the peserta data
        $peserta = PesertaUmum::find($undian->peserta_umum_id);
        
        // Update all records with the same NIK
        if ($peserta) {
            PesertaUmum::where('nik', $peserta->nik)->update([
                'status' => 1
            ]);
        }
    }

    // $undian = Undian::find($request->undian_id);
    // if (!empty($undian)) {
    //     PesertaUmum::where('id', $undian->peserta_umum_id)->update([
    //         'status' => 1
    //     ]);
    // }
})->name('pemenang-undian-umum.store');


// Bagian Peserta Grand Price
// Route::post('peserta-grandprice', function () {
//     $peserta = UndianGrandprice::inRandomOrder()->take(1)->first();
//     return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
// })->name('peserta-grandprice');
Route::post('peserta-grandprice', function () {
    $peserta = UndianGrandprice::whereHas('pesertaGrandprice', function($q){
        $q->where('status', 0);
    })->inRandomOrder()->take(1)->first(); // Mengambil 1 peserta secara acak
    return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
})->name('peserta-grandprice');

Route::post('nomor-undian-grandprice', function (Request $request) {
    $nomorundian = UndianGrandprice::orderBy('nomor_undian', 'ASC')->where('peserta_grandprice_id', $request->peserta_grandprice_id)->get();
    return response()->json(['message' => 'nomor undian peserta ditemukan', 'nomorundian' => $nomorundian], Response::HTTP_OK);
})->name('nomor-undian-grandprice');

Route::post('pemenang-undian-grandprice', function () {
    $undiangrandprice = PemenangUndianGrandprice::with('undianGrandprice')->orderBy('created_at', 'DESC')->get();
    return response()->json(['message' => 'pemenang undian grandprice ditemukan', 'undiangrandprice' => $undiangrandprice], Response::HTTP_OK);
})->name('pemenang-undian-grandprice');

Route::post('pemenang-undian-grandprice/store', function (Request $request) {
    PemenangUndianGrandprice::create([
        'id' => Str::uuid(),
        'undian_id' => $request->undian_id
    ]);

    $undian = UndianGrandprice::find($request->undian_id);
    if (!empty($undian)) {
        // Get the peserta data
        $peserta = PesertaGrandPrice::find($undian->peserta_grandprice_id);
        
        // Update all records with the same NIK
        if ($peserta) {
            PesertaGrandPrice::where('nik', $peserta->nik)->update([
                'status' => 1
            ]);
        }
    }
    
    // $undian = UndianGrandprice::find($request->undian_id);
    // if (!empty($undian)) {
    //     PesertaGrandPrice::where('id', $undian->peserta_grandprice_id)->update([
    //         'status' => 1
    //     ]);
    // }
})->name('pemenang-undian-grandprice.store');

// Bagian Peserta Umum Lima
Route::post('peserta-undian-lima', function () {
    $peserta = UndianUmumLima::whereHas('pesertaUmumLima', function($q){
        $q->where('status', 0);
    })->inRandomOrder()->take(5)->get(); // Mengambil 5 peserta secara acak
    return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
})->name('peserta-undian-lima');

Route::get('peserta-undian-lima', function () {
    $peserta = UndianUmumLima::select('nomor_undian')->whereHas('pesertaUmumLima', function($q){
        $q->where('status', 0);
    })->get(); // Mengambil 5 peserta secara acak
    return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
})->name('peserta-undian-lima');

Route::get('peserta-undian-lima/detail', function (Request $request) {
	$peserta = UndianUmumLima::whereIn('nomor_undian', $request->data)->get(); // Mengambil 5 peserta secara acak
	return response()->json(['message' => 'peserta undian ditemukan', 'peserta' => $peserta], Response::HTTP_OK);
})->name('peserta-undian-lima.detail');

Route::post('nomor-undian-umum-lima', function (Request $request) {
    $nomorundian = UndianUmumLima::orderBy('nomor_undian', 'ASC')->where('peserta_umum_lima_id', $request->peserta_umum_lima_id)->get();
    // $nomorundian = UndianUmumLima::where('peserta_umum_lima_id', $request->peserta_umum_lima_id)->inRandomOrder()->take(5)->get(); 
    return response()->json(['message' => 'nomor undian peserta ditemukan', 'nomorundian' => $nomorundian], Response::HTTP_OK);
})->name('nomor-undian-umum-lima');

Route::post('pemenang-undian-umum-lima', function () {
    $undianumumlima = PemenangUndianUmumLima::with('undianUmumLima')->orderBy('created_at', 'DESC')->get();
    return response()->json(['message' => 'pemenang undian umum lima ditemukan', 'undianumumlima' => $undianumumlima], Response::HTTP_OK);
})->name('pemenang-undian-umum-lima');

Route::post('pemenang-undian-umum-lima/store', function (Request $request) {
    foreach ($request->undian_ids as $id => $value) {
        PemenangUndianUmumLima::create([
            'id' => Str::uuid(),
            'undian_id' => $value,
        ]);

        //blokir nik jika sudah menang
        $undian = UndianUmumLima::find($value);
        if (!empty($undian)) {
            // Get the peserta data
            $peserta = PesertaUmumLima::find($undian->peserta_umum_lima_id);
            
            // Update all records with the same NIK
            if ($peserta) {
                PesertaUmumLima::where('nik', $peserta->nik)->update([
                    'status' => 1
                ]);
            }
        }

        //blokir rekening jika sudah menang
        // $undian = UndianUmumLima::find($value);
        // if (!empty($undian)) {
        //     PesertaUmumLima::where('id', $undian->peserta_umum_lima_id)->update([
        //         'status' => 1
        //     ]);
        // }
    }
    return response()->json('Berhasil');
})->name('pemenang-undian-umum-lima.store');