<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\chefcontroller;

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
Route :: get('/home', [pagescontroller::class,'index'])->name('index');

//---------------Login part start -------------

Route :: get('/login', [pagescontroller::class,'login'])->name('login');

// form submition
Route :: post('/login',[pagescontroller::class, 'loginsubmit'])->name('loginsumbmit');

// --------------- login part end ---------------

//-----------------Registration form access-----------

Route :: get('/registration', [pagescontroller::class,'reg'])->name('reg');

//Registration form submition
Route :: post('/registration',[pagescontroller::class,'regsubmit'])->name('regsubmit');

//--------------Registration part end--------------------------

Route :: get('/allpackage', [pagescontroller::class,'allpackage']);

Route :: get('/bookingprocess', [pagescontroller::class,'bookingprocess']);

Route :: get('/suggestedchef', [pagescontroller::class,'suggestedchef']);

//----------------start chef routing -------------------------

Route :: get('chef/cheflist', [chefcontroller::class,'cheflist'])->name('chef.cheflist');

Route :: get('chef/chefdetails/{id}/{name}/{location}', [chefcontroller::class,'chefdetails'])->name('chefdetails'); // name routing

Route :: get('chef/creatchef',[chefcontroller::class, 'creatchef']);

Route :: get('chef/getchef', [chefcontroller::class,'getchef']);

//-----------------end chef routing -------------------------

Route :: get('/confirmorder', [pagescontroller::class,'confirmorder']);

Route :: get('/invoice', [pagescontroller::class,'invoice']);

Route :: get('/payment', [pagescontroller::class,'payment']);

Route :: get('/myprofile', [pagescontroller::class,'myprofile']);

Route :: get('/chefprofile', [pagescontroller::class,'chefprofile']);



