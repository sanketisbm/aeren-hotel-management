<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontController::class, 'index'])->name('front.home');

Route::get('/about-us', function () {
    return view('front.about.aboutUs');
});

Route::get('/vision-and-mission', function () {
    return view('front.about.visionMission');
});

Route::get('/chairman-message', function () {
    return view('front.about.chairmanMessage');
});

Route::get('/principle-message', function () {
    return view('front.about.principleMessage');
});

Route::get('/award-and-recognisation', function () {
    return view('front.about.awardRecognisation');
});

Route::get('/academic-details', function () {
    return view('front.academics.academicDetails');
});

Route::get('/faculty-details-and-profiles', function () {
    return view('front.academics.facultyDetailsProfiles');
});

Route::get('/admission-process', function () {
    return view('front.admission.admissionProcess');
});

Route::get('/eligibility-criteria', function () {
    return view('front.admission.eligibility');
});


Route::get('/examination-result', function () {
    return view('front.admission.examinationResult');
});


Route::get('/fees-structure', function () {
    return view('front.admission.feesStructure');
});


Route::get('/student-support', function () {
    return view('front.student.studentSupport');
});

Route::get('/scholarships', function () {
    return view('front.student.scholarships');
});


Route::get('/student-life', function () {
    return view('front.student.studentLife');
});


Route::get('/contact-info-staff-and-departments', function () {
    return view('front.student.contactInfoSD');
});

Route::get('/campus-infrastructure', function () {
    return view('front.campus.campusInfrastructure');
});

Route::get('/campus-overview', function () {
    return view('front.campus.campusOverview');
});