<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use App\Collaborate;
use App\Http\Controllers\CollaborateController;

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

Route::get('apps', function (){
    return view('mobile.template');
});

//----------------  Route Home
Route::get('/', function () {
    return redirect()->route('beranda');
})->name('beranda');


Route::get('register', function(){
    return view (auth.register);
})->name('register');


Route::get('user/logout', 'UserController@logout')->name('user.logout');

Route::post('/userlogin', 'UserController@login');

Route::post('/usersign-up', 'UserController@sign_up');

Route::get('/jobhun-id/register/{code}', 'UserController@verified_akun');

//========================= Middleware ===============================================

Route::group(["middleware" => ['login']],function (){

    Route::get('/beranda', function () {
        return view('content.home');
    })->name('beranda');

    Route::get('user/table', 'UserController@index')->name('user.table');

});


Route::group(["middleware" => ['admin']],function (){

    //========================== Route User =============================
    Route::get('user/form', 'UserController@form')->name('user.form');

    Route::post('user/add', 'UserController@add')->name('user.add');

    Route::get('user/edit/{id}', 'UserController@edit');

    Route::patch('user/update/{id}', 'UserController@update');

    Route::get('user/hapus/{id}', 'UserController@delete');
});

//========================== Route Lowongan Kerja =================================


Route::get('mediapartner/table', 'JobController@view_mediapartner')->name('mediapartner.table');


//=========================================================================================================================




// =========================== Route Homepage User Bagian Depan ===========================

Route::get('/', 'Homepage_UserController@index')->name('index');

Route::get('about', 'Homepage_UserController@tentang')->name('about');

// Layanan
Route::get('/jobhun-careerhub', 'Homepage_UserController@jch')->name('jch');

Route::get('/loker/show/{id}', 'Homepage_UserController@spek_jch')->name('spek_jch');






Route::get('/jobhun-talent-pool', 'Homepage_UserController@jtp')->name('jtp');
// Program

Route::get('/jobhun-visit', 'Homepage_UserController@jv')->name('jv');

// Blog
Route::get('/post/{filter}', 'PostController@post')->name('post');

Route::get('/post/show/{url}' , 'PostController@show' );








//Talent Pool
Route::post('post/talent-pool/','TalentpoolController@add')->name('post.talentpool');



//search data

Route::post('/search','JobController@cari')->name('cari.loker');







// Footer

Route::get('/syarat-dan-ketentuan', 'Homepage_UserController@syarat')->name('syarat');

Route::get('/kebijakan-privasi', 'Homepage_UserController@kebijakan')->name('kebijakan');

Route::get('/berkarier-di-jobhun', 'Homepage_UserController@berkarier')->name('berkarier');





//=========================== Route Program ==============================
Route::get('user/program/internship', 'ProgramController@indexinternship')->name('program.internship');
Route::get('user/program/visit', 'ProgramController@indexvisit')->name('program.visit');
Route::get('user/program/talk', 'ProgramController@indextalk')->name('program.talk');
Route::get('user/program/detail', 'ProgramController@indexdetail')->name('program.detail');


Route::get('/tesvuejs', function () {
    return view('tes');
});

// Coba sajagff


// Verifikasi Email
Route::post('/register-user', 'UserController@store');

//

Route::get('/contoh-kwitansi', function () {
    return view('content/email/contoh_kwitansi');
})->name('kwitansi_tes');

