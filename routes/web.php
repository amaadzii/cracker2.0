<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/stats', function () {
    return view('user.pagestats');
});

Route::get('/edukasi', function () {
    return view('user.pageedu');
});

Route::get('/vaksinasi', function () {
    return view('user.pagevaccin');
});

Route::get('/detail-vaksinasi', function () {
    return view('user.pagevaccindetail');
});

Route::get('/rs-rujukan', function () {
    return view('user.pagehospital');
});

Route::get('/infografis', function () {
    return view('user.pageinfo');
});

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/info-vaksinasi', function () {
    return view('admin.infovaccin');
});

Route::get('/admin/info-rumahsakit', function () {
    return view('admin.infohospital');
});

Route::get('/admin/infografis', function () {
    return view('admin.infographic');
});

Route::get('/admin/edukasi', function () {
    return view('admin.education');
});

Route::get('/admin/tambah-vaksinasi', function () {
    return view('admin.manage.add_infovaccin');
});

Route::get('/admin/tambah-rumahsakit', function () {
    return view('admin.manage.add_infohospital');
});

Route::get('/admin/tambah-infografis', function () {
    return view('admin.manage.add_infographic');
});

Route::get('/admin/tambah-edukasi', function () {
    return view('admin.manage.add_education');
});