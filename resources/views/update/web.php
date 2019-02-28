<?php

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



Auth::routes();
Route::get('/home', 'Admin\HomeController@index')->name('home');
//Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Dashboard
Route::get('/dashboard', 'Admin\HomeController@dashboard')->middleware('auth')->name('dashboard');

Route::get('/changepassword', ['as' => 'changepassword' , function () {
    return view('admin/home/changepassword');
 }])->middleware('auth');

 Route::get('/profile', ['as' => 'profile' , function () {
    return view('admin/home/profile');
 }])->middleware('auth');

//Roles
 Route::get('/roles/deactivate/{id}', 'Admin\RoleController@deactivate')->middleware('auth');
 Route::get('/roles/active/{id}', 'Admin\RoleController@active')->middleware('auth');
 Route::resource('roles', 'Admin\RoleController')->middleware('auth');

//Staff/Admins
 Route::group(['prefix'=> 'admins'],function(){
    Route::get('create', 'Admin\UserController@create')->middleware('can:create-staff')->name('admins.create');
    Route::post('', 'Admin\UserController@store')->middleware('can:create-staff')->name('admins.store');   
    Route::get('', 'Admin\UserController@index')->middleware('can:admins-index')->name('admins.index');
    Route::get('{id}', 'Admin\UserController@show')->middleware('can:show-staff')->name('admins.show');
    Route::delete('delete/{id}', 'Admin\UserController@destroy')->middleware('can:delete-staff')->name('admins.destroy');
    Route::get('{id}/edit', 'Admin\UserController@edit')->middleware('can:edit-staff')->name('admins.edit');
    Route::patch('{id}', 'Admin\UserController@update')->middleware('auth')->name('admins.update');
    //Staff Status
    Route::get('resetpassword/{id}', 'Admin\UserController@resetPassword')->middleware('can:staff-reset-password')->name('resetpassword');
    Route::get('deactivate/{id}', 'Admin\UserController@deactivate')->middleware('can:status-staff');
    Route::get('active/{id}', 'Admin\UserController@active')->middleware('can:status-staff');
    
 });

 //Admin Menu
 Route::get('/menu/deactivate/{id}', 'Admin\AdminmenuController@deactivate')->middleware('can:menu-index');
 Route::get('/menu/active/{id}', 'Admin\AdminmenuController@active')->middleware('can:menu-index');
 Route::resource('menu', 'Admin\AdminmenuController')->middleware('can:menu-index');

// Question
Route::get('/question', 'Admin\QuestionController@index')->middleware('can:question-index')->name('question.index');
Route::get('/question/fetch', 'Admin\QuestionController@fetch')->middleware('can:question-fetch')->name('question.fetch');
Route::post('/question/store', 'Admin\QuestionController@store')->middleware('can:question-store')->name('question.store');
Route::post('/question/edit', 'Admin\QuestionController@edit')->middleware('can:question-edit')->name('question.edit');
Route::get('/question/show/{show}', 'Admin\QuestionController@show')->middleware('can:question-show')->name('question.show');
Route::post('question/active', 'Admin\QuestionController@questionActive')->middleware('auth')->name('question.active');
Route::post('question/disable', 'Admin\QuestionController@questionDisable')->middleware('auth')->name('question.disable');
 Route::post('question/optionFetch', 'Admin\QuestionController@optionFetch')->middleware('auth')->name('question.optionFetch');
 Route::post('/question/optionStore', 'Admin\QuestionController@optionStore')->middleware('auth')->name('question.optionStore');
 Route::post('/question/optionEdit', 'Admin\QuestionController@optionEdit')->middleware('auth')->name('question.optionEdit');

// Category
Route::get('/category', 'Admin\CategoryController@index')->middleware('can:category-index')->name('category.index');
Route::get('/category/fetch', 'Admin\CategoryController@fetch')->middleware('can:category-fetch')->name('category.fetch');
Route::post('/category/store', 'Admin\CategoryController@store')->middleware('can:category-store')->name('category.store');
Route::post('/category/edit', 'Admin\CategoryController@edit')->middleware('can:category-edit')->name('category.edit');
Route::post('category/active', 'Admin\CategoryController@categoryActive')->middleware('can:category-active')->name('category.active');
Route::post('category/disable', 'Admin\CategoryController@categoryDisable')->middleware('can:category-disable')->name('category.disable');
 // Testimonial
Route::get('/testimonial', 'Admin\TestimonialController@index')->middleware('can:testimonial-index')->name('testimonial.index');
Route::get('/testimonial/fetch', 'Admin\TestimonialController@fetch')->middleware('can:testimonial-fetch')->name('testimonial.fetch');
Route::post('/testimonial/store', 'Admin\TestimonialController@store')->middleware('can:testimonial-store')->name('testimonial.store');
Route::post('/testimonial/edit', 'Admin\TestimonialController@edit')->middleware('can:testimonial-edit')->name('testimonial.edit');
Route::post('testimonial/active', 'Admin\TestimonialController@testimonialActive')->middleware('can:testimonial-active')->name('testimonial.active');
Route::post('testimonial/disable', 'Admin\TestimonialController@testimonialDisable')->middleware('can:testimonial-disable')->name('testimonial.disable');

 // site config
Route::get('/configIndex', 'Admin\SiteConfigController@index')->middleware('can:configIndex-index')->name('configIndex.index');
Route::post('/configIndex/store', 'Admin\SiteConfigController@store')->middleware('can:configIndex-store')->name('configIndex.store');

// userInformation
Route::get('/userInformation', 'Admin\UserInformationController@index')->middleware('can:userInformation-index')->name('userInformation.index');
Route::get('/userInformation/fetch', 'Admin\UserInformationController@fetch')->middleware('can:userInformation-fetch')->name('userInformation.fetch');
Route::get('/userInformation/show/{show}', 'Admin\UserInformationController@show')->middleware('can:userInformation-show')->name('userInformation.show');
Route::post('/userInformation/answerFetch', 'Admin\UserInformationController@answerFetch')->middleware('auth')->name('userInformation.answerFetch');

////////////////////// Front Routes /////////////////////////////

Route::get('/', 'Front\HomeController@index')->name('front.home');
Route::get('/faq', 'Front\HomeController@faq')->name('faq');
Route::get('/general_conditions', 'Front\HomeController@general_conditions')->name('general_conditions');
Route::get('/protection_policy', 'Front\HomeController@protection_policy')->name('protection_policy');
Route::get('/contact_us', 'Front\HomeController@contact_us')->name('contact_us');
Route::post('/front_form', 'Front\HomeController@front_form')->name('front_form');
//Route::get('/health/{id}', 'Front\HomeController@health')->name('health');

Route::get('health/{id}', ['as' => 'health','uses' => 'Front\HomeController@health']);