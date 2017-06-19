<?php
use App\Customer;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
   	Route::get('/','DashbordController@index');
	Route::resource('dashbords','DashbordController');
	Route::resource('users','UserController');
	Route::resource('customers','customerController');
	Route::resource('staffs','StaffController');
	Route::resource('roles','RoleController');
	Route::resource('provinces','ProvinceController');
	Route::resource('districts','DistrictController');
	Route::resource('communes','CommuneController');
	Route::resource('villages','VillageController');
	Route::resource('invoices','InvoiceController');
	Route::resource('usages','UsageController');

	
});
Route::get('/getProvince/{id}',function($id=1){
	 	$district = DB::table('districts')->select('id','name')->where('province_id','=', $id)->get();
        //dd($commune);
        return response()->json($district);
});
Route::get('/getDistrict/{id}',function($id=1){
	 	$commune = DB::table('communes')->select('id','name')->where('district_id','=', $id)->get();
        //dd($commune);
        return response()->json($commune);
});
Route::get('/getCommune/{id}',function($id=1){
	 	$village = DB::table('villages')->select('id','name')->where('commune_id','=', $id)->get();
        //dd($commune);
        return response()->json($village);
});
Route::get('/getEmail/{id}',function($id){
	 	$cusemail = Customer::where('id','=', $id)->get();
	 	//dump($cusemail);
        return response()->json($cusemail);
});

