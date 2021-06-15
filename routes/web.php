<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainInformationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderNextController;
use App\Http\Controllers\OrderNextNextController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/mainInfo', [MainInformationController::class, 'index']);

Route::get('/reg', [RegController::class, 'index']);

Route::get('/price', [PriceController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/entries', [EntryController::class, 'index']);

Route::get('/entriesMaster', [EntryController::class, 'indexMaster']);

Route::get('/masters', [MasterController::class, 'index']);

Route::get('/main/mastersAdmin', [MasterController::class, 'indexAdmin']);

// Route::get('/main/graphsAdmin', [GraphController::class, 'indexAdmin']);

Route::get('/main/graphsAdmin{id}', [GraphController::class, 'indexAdmin'])->name('graphsAdmin');

Route::get('/main/servicesAdmin', [ServiceController::class, 'indexAdmin']);

Route::get('/main/mastersAdmin/addMaster', [MasterController::class, 'indexAddMaster']);

Route::get('/main/graphsAdmin/addGraph{id}', [GraphController::class, 'indexAddGraph'])->name('addGraph');

Route::get('/main/servicesAdmin/addService', [ServiceController::class, 'indexAddService']);

// ПОРТФОЛИО

Route::get('addPortfolio{id}', [PortfolioController::class, 'addPortfolio'])->name('addPortfolio');

Route::get('portfolio/{id}', [PortfolioController::class, 'showPortfolio'])->name('showPortfolio');

Route::get('/order', [OrderController::class, 'index']);

Route::get('/orderNext', [OrderController::class, 'index']);

Route::resource('order', OrderController::class);

Route::resource('rating', RatingController::class);

Route::resource('master', MasterController::class);

Route::resource('portfolio', PortfolioController::class);

Route::resource('graph', GraphController::class);

Route::resource('service', ServiceController::class);

Route::resource('orderNext', OrderNextController::class);

Route::resource('orderNextNext', OrderNextNextController::class);

Route::get('oneMaster/{id}', [MasterController::class, 'showMaster'])->name('oneMaster');

Route::get('editMaster/{id}', [MasterController::class, 'update'])->name('editMaster');

Route::get('/main/servicesAdmin/editService/{id}', [ServiceController::class, 'update'])->name('editService');

Route::get('editGraph/{id}', [GraphController::class, 'update'])->name('editGraph');
  
Route::post('/', [RatingController::class, 'store'])->name('ratingStore');

Route::post('/main/mastersAdmin', [MasterController::class, 'store'])->name('masterStore');

Route::get('/entriesEdit/{id}', [EntryController::class, 'edit'])->name('orderUpdateStatus');

Route::get('/entries/{id}', [EntryController::class, 'editMaster'])->name('orderUpdateStatusMaster');

Route::get('/entriesMaster/{id}', [EntryController::class, 'edit'])->name('orderUpdateStatusMasterCancel');

Route::get('deleteMaster/{id}', [MasterController::class, 'delete'])->name('deleteMaster');

Route::get('deleteGraph/{id}', [GraphController::class, 'delete'])->name('deleteGraph');

Route::get('deleteService/{id}', [ServiceController::class, 'delete'])->name('deleteService');

Route::get('deletePortfolio/{id}', [PortfolioController::class, 'delete'])->name('deletePortfolio');


Route::get('/main', function(){
    return view('admin/main');
});
