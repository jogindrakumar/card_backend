<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\WorkController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TargetController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\BackgroundController;
use App\Models\Admin;
use App\Models\About;
use App\Models\Target;
use App\Models\Skill;
use App\Models\Work;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Background;

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
    $abouts = About::latest()->get();
    $skills = Skill::latest()->get();
    $works = Work::latest()->get();
    $portfolios = Portfolio::latest()->get();
    $educations = Education::latest()->get();
    $services = Service::latest()->get();
    $targets = Target::latest()->get();
    $backgrounds = Background::where('status',1)->limit(1)->get();
    return view('home',compact('abouts','skills','portfolios','works','educations','services','targets','backgrounds'));
});

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//admin route
Route::group(['prefix' => 'admin', 'middleware'=>['admin:admin']],function(){

    Route::get('/login',[AdminController::class,'loginForm']);
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');

   

});



 //Admin All routes
 Route::middleware(['auth:admin'])->group(function () {
    
 Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
 Route::get('/admin/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');
 Route::get('/admin/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');
 Route::post('/admin/profile/store',[AdminProfileController::class,'AdminProfileStore'])->name('admin.profile.store');
 Route::get('/admin/change/password',[AdminProfileController::class,'AdminChangePassword'])->name('admin.change.password');
 Route::post('/admin/update/password',[AdminProfileController::class,'AdminUpdatePassword'])->name('update.change.password');

 });

Route::prefix('about')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[AboutController::class,'AboutView'])->name('all.about');
Route::get('/add',[AboutController::class,'AboutAdd'])->name('add.about');
Route::post('/store',[AboutController::class,'AboutStore'])->name('about.store');
Route::get('/edit/{id}',[AboutController::class,'AboutEdit'])->name('about.edit');
Route::post('/update/{id}',[AboutController::class,'AboutUpdate'])->name('about.update');
Route::get('/delete/{id}',[AboutController::class,'AboutDelete'])->name('about.delete');


 });

Route::prefix('skill')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[SkillController::class,'SkillView'])->name('all.skill');
Route::get('/add',[SkillController::class,'SkillAdd'])->name('add.skill');
Route::post('/store',[SkillController::class,'SkillStore'])->name('skill.store');
Route::get('/edit/{id}',[SkillController::class,'SkillEdit'])->name('skill.edit');
Route::post('/update/{id}',[SkillController::class,'SkillUpdate'])->name('skill.update');
Route::get('/delete/{id}',[SkillController::class,'SkillDelete'])->name('skill.delete');


 });

Route::prefix('work')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[WorkController::class,'WorkView'])->name('all.work');
Route::get('/add',[WorkController::class,'WorkAdd'])->name('add.work');
Route::post('/store',[WorkController::class,'WorkStore'])->name('work.store');
Route::get('/edit/{id}',[WorkController::class,'WorkEdit'])->name('work.edit');
Route::post('/update/{id}',[WorkController::class,'WorkUpdate'])->name('work.update');
Route::get('/delete/{id}',[WorkController::class,'WorkDelete'])->name('work.delete');

 });

 

 Route::prefix('education')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[EducationController::class,'EduView'])->name('all.edu');
Route::get('/add',[EducationController::class,'EduAdd'])->name('add.edu');
Route::post('/store',[EducationController::class,'EduStore'])->name('edu.store');
Route::get('/edit/{id}',[EducationController::class,'EduEdit'])->name('edu.edit');
Route::post('/update/{id}',[EducationController::class,'EduUpdate'])->name('edu.update');
Route::get('/delete/{id}',[EducationController::class,'EduDelete'])->name('edu.delete');


 });
Route::prefix('portfolio')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[PortfolioController ::class,'PortfolioView'])->name('all.portfolio');
Route::get('/add',[PortfolioController ::class,'PortfolioAdd'])->name('add.portfolio');
Route::post('/store',[PortfolioController ::class,'PortfolioStore'])->name('portfolio.store');
Route::get('/edit/{id}',[PortfolioController ::class,'PortfolioEdit'])->name('portfolio.edit');
Route::post('/update/{id}',[PortfolioController ::class,'PortfolioUpdate'])->name('portfolio.update');
Route::get('/delete/{id}',[PortfolioController ::class,'PortfolioDelete'])->name('portfolio.delete');

 });

Route::prefix('service')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[ServiceController ::class,'ServiceView'])->name('all.service');
Route::get('/add',[ServiceController ::class,'ServiceAdd'])->name('add.service');
Route::post('/store',[ServiceController ::class,'ServiceStore'])->name('service.store');
Route::get('/edit/{id}',[ServiceController ::class,'ServiceEdit'])->name('service.edit');
Route::post('/update/{id}',[ServiceController ::class,'ServiceUpdate'])->name('service.update');
Route::get('/delete/{id}',[ServiceController ::class,'ServiceDelete'])->name('service.delete');

 });


Route::prefix('target')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[TargetController ::class,'TargetView'])->name('all.target');
Route::get('/add',[TargetController ::class,'TargetAdd'])->name('add.target');
Route::post('/store',[TargetController ::class,'TargetStore'])->name('target.store');
Route::get('/edit/{id}',[TargetController ::class,'TargetEdit'])->name('target.edit');
Route::post('/update/{id}',[TargetController ::class,'TargetUpdate'])->name('target.update');
Route::get('/delete/{id}',[TargetController ::class,'TargetDelete'])->name('target.delete');

 });

 

Route::prefix('message')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[ContactController ::class,'MessageView'])->name('all.message');
// Route::get('/add',[ContactController ::class,'MessageAdd'])->name('add.message');
Route::post('/store',[ContactController ::class,'MessageStore'])->name('message.store');
Route::get('/edit/{id}',[ContactController ::class,'MessageEdit'])->name('message.edit');
Route::post('/update/{id}',[ContactController ::class,'MessageUpdate'])->name('message.update');
Route::get('/delete/{id}',[ContactController ::class,'MessageDelete'])->name('message.delete');

 });
 
 Route::prefix('background')->middleware(['auth:admin'])->group(function(){
Route::get('/view',[BackgroundController ::class,'BackgroundView'])->name('all.background');
Route::get('/add',[BackgroundController ::class,'BackgroundAdd'])->name('add.background');
Route::post('/store',[BackgroundController ::class,'BackgroundStore'])->name('background.store');
Route::get('/edit/{id}',[BackgroundController ::class,'BackgroundEdit'])->name('background.edit');
Route::post('/update/{id}',[BackgroundController ::class,'BackgroundUpdate'])->name('background.update');
Route::get('/delete/{id}',[BackgroundController ::class,'BackgroundDelete'])->name('background.delete');
Route::get('/inactive/{id}', [BackgroundController ::class, 'BackgroundInactive'])->name('background.inactive');
Route::get('/active/{id}', [BackgroundController ::class, 'BackgroundActive'])->name('background.active');

 });


 
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
