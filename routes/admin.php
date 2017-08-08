<?php
use App\infrasurvey;
use App\feedbacksurvey;
use App\facilitysurvey;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
$infra = infrasurvey::get();
$feedback = feedbacksurvey::get();
$facility = facilitysurvey::get();

// dd($infra);
    return view('admin.home')->with('infra',$infra)->with('feedback',$feedback)->with('facility',$facility);
})->name('home');

