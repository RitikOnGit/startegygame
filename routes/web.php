<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/add-coin', function (Request $reuest) {
    dd($reuest->all());
    return view('welcome');
});
// login

Route::get('/userlogin', [App\Http\Controllers\Admin\loginController::class,'user'])->name('user');
Route::get('/login', [App\Http\Controllers\Admin\loginController::class,'login_index'])->name('login_index');
Route::get('/choose_role', [App\Http\Controllers\Admin\loginController::class,'choose_role'])->name('choose_role');
Route::post('/save_role', [App\Http\Controllers\Admin\loginController::class,'save_role'])->name('saveRole');
Route::get('/leader_board', [App\Http\Controllers\Admin\loginController::class,'leader_board'])->name('leader_board');
Route::post('/uploadexcel', [App\Http\Controllers\Admin\AdminDashboardController::class,'uploadexcel'])->name('uploadexcel');


Route::get('/task', [App\Http\Controllers\Admin\loginController::class,'task_tofollow'])->name('task_tofollow');
Route::get('/video', [App\Http\Controllers\Admin\loginController::class,'video1'])->name('video1');
Route::get('/business_video', [App\Http\Controllers\Admin\loginController::class,'business_video'])->name('business_video');

Route::post('/registration-form', [App\Http\Controllers\Admin\loginController::class,'Register'])->name('Register');
Route::post('/submit-form', [App\Http\Controllers\Admin\loginController::class,'admin_login'])->name('admin_login');

// first board
Route::get('/index', [App\Http\Controllers\User\UserController::class,'index'])->name('index');
Route::get('/strategy_card', [App\Http\Controllers\User\UserController::class,'strategy_card'])->name('strategy_card');
Route::get('/find_strategy', [App\Http\Controllers\User\UserController::class,'find_strategy'])->name('find_strategy');
Route::get('/product_card', [App\Http\Controllers\User\UserController::class,'product_card'])->name('product_card');
Route::get('/flag_card', [App\Http\Controllers\User\UserController::class,'flag_card'])->name('flag_card');
Route::get('/IT_service_card', [App\Http\Controllers\User\UserController::class,'IT_service_card'])->name('IT_service_card');
Route::get('/single-data', [App\Http\Controllers\User\UserController::class,'single_data'])->name('single-data');
Route::get('/add-coins', [App\Http\Controllers\User\UserController::class,'add_coin'])->name('add-coin');
Route::get('/get_matrix', [App\Http\Controllers\User\UserController::class,'get_matrix'])->name('get_matrix');
Route::get('/add_matrix', [App\Http\Controllers\User\UserController::class,'add_matrix'])->name('add_matrix');
Route::get('/product_launch', [App\Http\Controllers\User\UserController::class,'product_launch'])->name('product_launch');

// QuarterY1Q1
Route::get('/round2', [App\Http\Controllers\User\User_R2Controller::class,'round_two'])->name('round2');
Route::get('/selectOpt', [App\Http\Controllers\User\User_R2Controller::class,'select_Opt'])->name('selectOpt');
Route::get('/update_product_flag', [App\Http\Controllers\User\User_R2Controller::class,'update_product_flag'])->name('update_product_flag');
Route::get('/selectOpt_update', [App\Http\Controllers\User\User_R2Controller::class,'selectOpt_update'])->name('selectOpt_update');
Route::get('add_wallet_coin', [App\Http\Controllers\User\User_R2Controller::class,'add_wallet_coin'])->name('add_wallet_coin'); //not working
Route::get('car_total_val', [App\Http\Controllers\User\User_R2Controller::class,'car_total_val'])->name('car_total_val'); //not working
Route::get('sub_customer_money', [App\Http\Controllers\User\User_R2Controller::class,'sub_customer_money'])->name('sub_customer_money'); //not working
Route::get('pay_res', [App\Http\Controllers\User\User_R2Controller::class,'pay_res'])->name('pay_res'); //not working
Route::get('payresources', [App\Http\Controllers\User\User_R2Controller::class,'payresources'])->name('payresources'); //not working
Route::get('/costotalYear1', [App\Http\Controllers\User\User_R2Controller::class,'costotalYear1'])->name('costotalYear1');
Route::get('/salesTotalY1', [App\Http\Controllers\User\User_R2Controller::class,'salesTotalY1'])->name('salesTotalY1');
// Route::get('/round3', [App\Http\Controllers\User\User_R2Controller::class,'round_three'])->name('round3');

// QuarterY1Q2
Route::get('/QuarterY1Q2', [App\Http\Controllers\User\User_R3Controller::class,'round_three'])->name('round3');
Route::get('/q2selectOpt', [App\Http\Controllers\User\User_R3Controller::class,'q2selectOpt'])->name('q2selectOpt');
Route::get('/costotalYear1Q2', [App\Http\Controllers\User\User_R3Controller::class,'costotalYear1Q2'])->name('costotalYear1Q2');
Route::get('/salesTotalY1Q2', [App\Http\Controllers\User\User_R3Controller::class,'salesTotalY1Q2'])->name('salesTotalY1Q2');
Route::get('/event_Y1Q2', [App\Http\Controllers\User\User_R3Controller::class,'event_Y1Q2'])->name('event_Y1Q2');

// QuarterY1Q3
Route::get('/QuarterY1Q3', [App\Http\Controllers\User\Y1Q3Controller::class,'round_four'])->name('round4');
Route::get('/q2selectOpt_y1q3', [App\Http\Controllers\User\Y1Q3Controller::class,'q2selectOpt_y1q3'])->name('q2selectOpt_y1q3');
Route::get('/selectOpt_update_y1q3', [App\Http\Controllers\User\Y1Q3Controller::class,'selectOpt_update_y1q3'])->name('selectOpt_update_y1q3');
Route::get('/event_Y1Q3', [App\Http\Controllers\User\Y1Q3Controller::class,'event_Y1Q3'])->name('event_Y1Q3');

// QuarterY1Q4
Route::get('/QuarterY1Q4', [App\Http\Controllers\User\Y1Q4Controller::class,'round_five'])->name('round5');
Route::get('/q2selectOpt_y1q4', [App\Http\Controllers\User\Y1Q4Controller::class,'q2selectOpt_y1q4'])->name('q2selectOpt_y1q4');
Route::get('/selectOpt_update_y1q4', [App\Http\Controllers\User\Y1Q4Controller::class,'selectOpt_update_y1q4'])->name('selectOpt_update_y1q4');

// first board
Route::get('/summary_Y1', [App\Http\Controllers\User\Y1SummaryController::class,'summary'])->name('summary_Y1');
Route::get('/impact_matrix_sy1', [App\Http\Controllers\User\Y1SummaryController::class,'matrix_impact_card'])->name('impact_matrix_sy1');

// cache clear route
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

Route::get('/clear-route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'All routes cache has just been removed';
});
//Remove config cache
Route::get('/clear-config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache has just been removed';
}); 
// Remove application cache
Route::get('/clear-app-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache has just been removed';
});
// Remove view cache
Route::get('/clear-view-cache', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache has jut been removed';
});


Route::get('/clear-cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');
   return "Cache cleared successfully";
});

Route::get('file-import-export', [App\Http\Controllers\Admin\AdminDashboardController::class, 'fileImportExport']);
Route::post('file-import', [App\Http\Controllers\Admin\AdminDashboardController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [App\Http\Controllers\Admin\AdminDashboardController::class, 'fileExport'])->name('file-export');