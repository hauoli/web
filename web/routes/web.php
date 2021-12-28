<?php

use Illuminate\Support\Facades\Route;

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
	return view('index');
});

Route::get('/company', function () {
	return view('company', [
		'now_company'		=> 'now'
	]);
});

Route::get('/brand/{cate?}', function ($cate = 'hauoli') {
	return view('brand.'.$cate, [
		'now_brand'			=> 'now'
	]);
});

Route::get('/business', function () {
	return view('business', [
		'now_business'		=> 'now'
	]);
});

Route::get('/onestop', function () {
	return view('onestop', [
		'now_onestop'		=> 'now'
	]);
});

Route::get('/build', function () {
	return view('build', [
		'now_assure'		=> 'now'
	]);
});

Route::get('/visit', function () {
	return view('visit');
});
Route::get('/visit_done', function () {
	return view('visit_done');
});

Route::get('/project/saejeolA', function () {
	return view('project.saejeolA', [
		'now_project'		=> 'now'
	]);
});

Route::get('/project/hwagokA', function () {
	return view('project.hwagokA', [
		'now_project'		=> 'now'
	]);
});

Route::get('/project/ysnA', function () {
	return view('project.ysnA', [
		'now_project'		=> 'now'
	]);
});

Route::get('/project/gusanA', function () {
	return view('project.gusanA', [
		'now_project'		=> 'now'
	]);
});

Route::get('/project/sdbB', function () {
	return view('project.sdbB', [
		'now_project'		=> 'now'
	]);
});

Route::get('/project/{category?}/{page?}', function ($category = 'all', $page = '1') {
	return view('project', [
		'now_project'		=> 'now',
		'category'			=> $category,
		'page'				=> $page
	]);
});

Route::post('/mailSend', 'App\Http\Controllers\MailController@send');

?>
