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
//----------------  Route Home
Route::get('/', function () {
    return redirect()->route('beranda');
})->name('beranda');


Route::get('register', function(){
    return view (auth.register);
})->name('register');


Route::get('user/logout', 'UserController@logout')->name('user.logout');

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

//========================== Route Post =============================

Route::get('/post/table', 'PostController@index')->name('post.table');

Route::get('/post/form', 'PostController@form')->name('post.form');

Route::post('post/add', 'PostController@add')->name('post.add');

Route::get('post/edit/{id}', 'PostController@edit');

Route::patch('post/update/{id}', 'PostController@update');

Route::get('post/hapus/{id}', 'PostController@delete');


//=========================== Route Tag ==============================

Route::get('tag/table', 'TagController@index')->name('tag.table');

Route::get('/tag/form', 'TagController@form')->name('tag.form');

Route::post('tag/add', 'TagController@add')->name('tag.add');

Route::get('tag/edit/{id}', 'TagController@edit');

Route::patch('tag/update/{id}', 'TagController@update');

Route::get('tag/delete/{id}', 'TagController@delete');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//=========================== Route Testimoni ==============================
Route::get('testimoni/table', 'TestimoniController@index')->name('testimoni.table');

Route::get('/testimoni/form', 'TestimoniController@form')->name('testimoni.form');

Route::post('testimoni/add', 'TestimoniController@add')->name('testimoni.add');

Route::get('testimoni/delete/{id}', 'TestimoniController@delete');

Route::get('testimoni/edit/{id}', 'TestimoniController@edit');

Route::get('testimoni/update/{id}', 'TestimoniController@update');



//=========================== Route Collaborate ==============================
Route::get('collaborate/table', 'CollaborateController@index')->name('collaborate.table');

Route::get('collaborate/form', 'CollaborateController@form')->name('collaborate.form');

Route::post('collaborate/add', 'CollaborateController@add')->name('collaborate.add');

Route::get('collaborate/delete/{id}', 'CollaborateController@delete')->name('collaborate.delete');

Route::get('collaborate/edit/{id}', 'CollaborateController@edit')->name('collaborate.edit');

Route::get('collaborate/update/{id}', 'CollaborateController@update')->name('collaborate.update');

//========================== Route Lowongan Kerja =================================

Route::get('lowongan/table', 'JobController@view_loker')->name('loker.table');

Route::get('mediapartner/table', 'JobController@view_mediapartner')->name('mediapartner.table');


//=========================================================================================================================











// =========================== Route Homepage User Bagian Depan ===========================

Route::get('/', 'Homepage_UserController@index')->name('index');

Route::get('/about', 'Homepage_UserController@tentang')->name('about');

// Layanan
Route::get('/jobhun-careerhub', 'Homepage_UserController@jch')->name('jch');

Route::get('/loker/show/{id}', 'Homepage_UserController@spek_jch')->name('spek_jch');




Route::get('/jobhun-academy', 'Homepage_UserController@ja')->name('ja');

Route::get('/jobhun-academy-content-writer', 'Homepage_UserController@content_writer')->name('content-writer');

Route::get('/jobhun-academy-graphic-designer', 'Homepage_UserController@graphic_designer')->name('graphic-designer');

Route::get('/jobhun-academy-videographer', 'Homepage_UserController@videographer')->name('videographer');

Route::get('/jobhun-academy-web-developer', 'Homepage_UserController@web')->name('web');

Route::get('/jobhun-academy-android-developer', 'Homepage_UserController@android')->name('android');

Route::get('/jobhun-academy-ui-ux-designer', 'Homepage_UserController@ui')->name('ui');

Route::get('/jobhun-academy-copywriter', 'Homepage_UserController@copywriter')->name('copywriter');

Route::get('/jobhun-academy-social-media-specialist', 'Homepage_UserController@social_media')->name('social_media');

Route::get('/jobhun-academy-public-speaker', 'Homepage_UserController@public_speaker')->name('public_speaker');

Route::get('/jobhun-academy-startup-founder', 'Homepage_UserController@startup_founder')->name('startup_founder');

Route::get('/jobhun-academy-media-partner', 'Homepage_UserController@media')->name('media');

Route::get('/jobhun-talent-pool', 'Homepage_UserController@jtp')->name('jtp');
// Program

Route::get('/jobhun-visit', 'Homepage_UserController@jv')->name('jv');

// Blog
Route::get('/post/{filter}', 'PostController@post')->name('post');

Route::get('/post/show/{url}' , 'PostController@show' );

//Loker
Route::post('post/jobs/','JobController@add')->name('post.jobs');

Route::get('loker/verified/{id}', 'JobController@verified')->name('verified_job');

Route::get('loker/delete/{id}', 'JobController@delete')->name('delete_job');

//Media Partner
Route::post('post/media-partner/','JobController@media_partner')->name('post.mediapartner');

Route::get('mediapartner/delete/{id}', 'JobController@delete_mediapartner')->name('delete_mediapartner');

Route::get('mediapartner/verified/{id}', 'JobController@verified_mediapartner')->name('verified_mediapartner');


//Jobhyn Academy
Route::get('form/jobhun-academy/','JobController@form_jobhun_academy')->name('form.jobhunacademy');







// Footer

Route::get('/syarat-dan-ketentuan', 'Homepage_UserController@syarat')->name('syarat');

Route::get('/kebijakan-privasi', 'Homepage_UserController@kebijakan')->name('kebijakan');

Route::get('/berkarier-di-jobhun', 'Homepage_UserController@berkarier')->name('berkarier');





//=========================== Route Program ==============================
Route::get('user/program/internship', 'ProgramController@indexinternship')->name('program.internship');
Route::get('user/program/visit', 'ProgramController@indexvisit')->name('program.visit');
Route::get('user/program/talk', 'ProgramController@indextalk')->name('program.talk');
Route::get('user/program/detail', 'ProgramController@indexdetail')->name('program.detail');

//================================ Route Posting Job ===============================

Route::get('postingjob/form/reguler', 'JobController@form_reguler')->name('formposting_reguler');

Route::get('postingjob/form/premium', 'JobController@form_premium')->name('formposting_premium');

Route::get('postingjob/type', 'JobController@indextype')->name('typeposting');

Route::get('posting/media-partner/form', 'JobController@index_media_partner')->name('form_media_partner');


Route::get('/tesvuejs', function () {
    return view('tes');
});

// Coba sajagff


// Verifikasi Email
Route::post('/register-user', 'UserController@store');