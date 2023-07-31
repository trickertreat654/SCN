<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Ticket;
//import mail
use Illuminate\Support\Facades\Mail; 
 
use App\Mail\TicketNotification;
// use Illuminate\Http\Request;
// import validate class
// use Illuminate\Support\Facades\Validator;



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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('/');

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('Home');

Route::get('/services', function () {
    return Inertia::render('Services');
})->name('Services');

Route::get('/company', function () {
    return Inertia::render('Company');
})->name('Company');

Route::get('/applications', function () {
    return Inertia::render('Applications');
})->name('Applications');

Route::get('/HS', function () {
    return Inertia::render('HS');
})->name('HS');

Route::get('/Support', function () {
    return Inertia::render('Support');
})->name('Support');


Route::get('todo', function(){
    return Inertia::render('Todo');
})->name('todo');

Route::post('/ticket', function () {
    sleep(5);
   
    $attributes = request()->validate([
        'type_of_service' => 'required',
        'name' => 'required',
        'phone' => 'required',
        'type_of_business' => 'required',
        'city' => 'required',
        'state' => 'required',
        'email' => 'required',
        'comments' => 'required',
    ]);

    // $attributes = Request::validate([
    //     'type_of_service' => 'required',
    //     'name' => 'required',
    //     'phone' => 'required',
    //     'type_of_buisness' => 'required',
    //     'city' => 'required',
    //     'state' => 'required',
    //     'email' => 'required',
    //     'comments' => 'required',
    // ]);

    Ticket::create($attributes);

    Mail::to('trickertreat654@gmail.com')->send(new TicketNotification($attributes));

    // Ticket::create([
    //     'type_of_service' => request('typeOfService'),
    //     'name' => request('name'),
    //     'phone' => request('phone'),
    //     'type_of_business' => request('typeOfBusiness'),
    //     'city' => request('city'),
    //     'state' => request('state'),
    //     'email' => request('email'),
    //     'comments' => request('comments'),
    // ]);
   
   
   // return redirect('/')->with('success', 'Ticket Created Successfully');
})->name('ticket');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
