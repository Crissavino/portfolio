<?php

use Illuminate\Support\Facades\Mail;
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
    return view('home');
});

Route::post('/contact-me', function () {

    $validated = request()->validate(
        [
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]
    );

    $details = [
        'title' => 'Email contact sent successfully for Cristian Savino',
        'body' => 'I received your contact, in the next few hours you will receive an answer'

    ];

    Mail::to($validated['email'])->send(new \App\Mail\ContactMail($details));

    $title = "Contact to Cristian Savino Portfolio from " . $validated['name'] . ' ' . $validated['lastName'] . " email " . $validated['email'];
    $msg = $validated['message'];

    Mail::to('savinocristian89@gmail.com')->send(new \App\Mail\ContactMailForUs($title, $validated['subject'], $msg));

    return redirect()->back();
});
