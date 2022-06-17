<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\KetosController;
use App\Http\Controllers\PendapatController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\EkstraController;

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


Route::get('/', [IndexController::class, 'index']);

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/header', [HeaderController::class, 'index'])->name('header');
Route::get('/editformheader/{id}', [HeaderController::class, 'editform']);
Route::post('/editHeader/{id}', [HeaderController::class, 'update']);

Route::get('/ketos', [KetosController::class, 'index'])->name('ketos');
Route::view('/addformketos', 'ketos.add');
Route::post('/addKetos', [KetosController::class, 'insert']);
Route::get('/editformketos/{id}', [KetosController::class, 'editform']);
Route::post('/editKetos/{id}', [KetosController::class, 'update']);
Route::get('deleteKetos/{id}', [KetosController::class, 'delete']); 

Route::get('/bidang', [BidangController::class, 'index'])->name('bidang');
Route::view('/addformbidang', 'bidang.add');
Route::post('/addBidang', [BidangController::class, 'insert']);
Route::get('/editformbidang/{id}', [BidangController::class, 'editform']);
Route::post('/editBidang/{id}', [BidangController::class, 'update']);
Route::get('deleteBidang/{id}', [BidangController::class, 'delete']);

Route::get('/ekstra', [EkstraController::class, 'index'])->name('ekstra');
Route::view('/addformekstra', 'ekstra.add');
Route::post('/addEkstra', [EkstraController::class, 'insert']);
Route::get('/editformekstra/{id}', [EkstraController::class, 'editform']);
Route::post('/editEkstra/{id}', [EkstraController::class, 'update']);
Route::get('deleteEkstra/{id}', [EkstraController::class, 'delete']);

Route::get('/pendapat', [PendapatController::class, 'index'])->name('pendapat');
Route::view('/addformpendapat', 'pendapat.add');
Route::post('/addPendapat', [PendapatController::class, 'insert']);
Route::get('/editformpendapat/{id}', [PendapatController::class, 'editform']);
Route::post('/editPendapat/{id}', [PendapatController::class, 'update']);
Route::get('deletePendapat/{id}', [PendapatController::class, 'delete']);

Route::get('/video', [VideoController::class, 'index'])->name('video');
Route::view('/addformvideo', 'video.add');
Route::post('/addVideo', [VideoController::class, 'insert']);
Route::get('/editformvideo/{id}', [VideoController::class, 'editform']);
Route::post('/editVideo/{id}', [VideoController::class, 'update']);
Route::get('deleteVideo/{id}', [VideoController::class, 'delete']);

Route::get('/visi', [VisiController::class, 'index'])->name('visi');
Route::get('/editformvisi/{id}', [VisiController::class, 'editform']);
Route::post('/editVisi/{id}', [VisiController::class, 'update']);

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/editformsetting/{id}', [SettingController::class, 'editform']);
Route::post('/editSetting/{id}', [SettingController::class, 'update']);
