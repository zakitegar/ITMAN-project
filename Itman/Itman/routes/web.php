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
    return view('welcome');
})->name('default');

Route::get('/formulir', [GuruController::class, 'formulir']);
Route::post('/formulir/proses', [GuruController::class, 'proses']);

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.frontend.index');

Route::get('/order/cetak_pdf', 'App\Http\Controllers\OrderController@cetak_pdf')->name('order.cetak_pdf');

Route::post('/contact/send', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];

    $sdo = \App\Models\Message::create($data);

    return back()->with('success', 'Message sent successfully');
})->name('contact.frontend.send');
Route::get('/front/service', 'App\Http\Controllers\ServiceController@pageIndex')->name('service.frontend.index');

Auth::routes();

Route::post('/front/service/order', function (\Illuminate\Http\Request $request) {
    if ($request->has('service_id')) {

        if (count($request->service_id) > 0 ) {
            $order = new \App\Models\Order();
            $order->service_id = array_keys($request->service_id);
            $order->user_id = auth()->user()->id;
            $order->status = 'new';

            $tot_price = 0;

            foreach (\App\Models\Service::find($order->service_id) as $service) {
                $tot_price += $service->price;
            }

            $order->total_price = $tot_price;
            $order->save();

            return redirect()->route('service.frontend.index');
        }
    }
})->name('service.frontend.order');

Route::group(['middleware' => 'role:admin'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('/message',function () {
        $mess = \App\Models\Message::all();

        return view('message')->withMessages($mess);
    })->name('message.list');

    Route::get('/order/list', [App\Http\Controllers\OrderController::class, 'index'])->name('order.list');
    
    Route::group(['prefix' => 'service'], function () {
        Route::get('/list', [App\Http\Controllers\ServiceController::class, 'index'])->name('service.list');
        Route::get('/create', [App\Http\Controllers\ServiceController::class, 'formService'])->name('service.form');
        Route::post('/post', [App\Http\Controllers\ServiceController::class, 'postService'])->name('service.post');
    });
});