<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Accomodation\AccomodationList;
use App\Http\Livewire\RealEstateType\RealEstateTypeList;
use App\Http\Livewire\Client\ClientList;
use App\Http\Livewire\Company\CompanyList;
use App\Http\Livewire\Location\LocationList;
use App\Http\Livewire\User\UserList;
use App\Http\Livewire\UnitProfile\UnitProfileList;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => [
    'auth:sanctum',
    'verified'
]], function () {
    Route::get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');
    Route::get('/accomodation', AccomodationList::class)->name('accomodation');
    Route::get('/real-estate-type',RealEstateTypeList::class)->name('real-estate-type');
    Route::get('/client', ClientList::class)->name('client');
    Route::get('/company', CompanyList::class)->name('company');
    Route::get('/location', LocationList::class)->name('location');
    Route::get('/user', UserList::class)->name('user');
    Route::get('/unit-profile', UnitProfileList::class)->name('unit-profile');
});
