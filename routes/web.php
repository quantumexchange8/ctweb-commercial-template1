<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home', function () {
    return view('home.home');
});



// -------- About Us ----------
Route::get('/about', function () {
    return view('aboutUs.about');
});

Route::get('/company_Overviews', function () {
    return view('aboutUs.company_Overviews');
});

Route::get('/company_History', function () {
    return view('aboutUs.company_History');
});

Route::get('/ourTeam', function () {
    return view('aboutUs.ourTeam');
});

Route::get('/ourPartners', function () {
    return view('aboutUs.ourPartners');
});

Route::get('/faqs', function () {
    return view('aboutUs.faqs');
});

Route::get('/client_Feedback', function () {
    return view('aboutUs.client_Feedback');
});

Route::get('/404_Pages', function () {
    return view('aboutUs.404_Pages');
});



// -------- Our Services ----------
Route::get('/services', function () {
    return view('ourServices.services');
});

Route::get('/business_Planning', function () {
    return view('ourServices.business_Planning');
});

Route::get('/audit_N_Assurance', function () {
    return view('ourServices.audit_N_Assurance');
});

Route::get('/trades_N_Stocks', function () {
    return view('ourServices.trades_N_Stocks');
});

Route::get('/investment_Plan', function () {
    return view('ourServices.investment_Plan');
});

Route::get('/risk_Management', function () {
    return view('ourServices.risk_Management');
});

Route::get('/succession_Planning', function () {
    return view('ourServices.succession_Planning');
});

Route::get('/strategic_Planning', function () {
    return view('ourServices.strategic_Planning');
});

Route::get('/financial_Projections', function () {
    return view('ourServices.financial_Projections');
});


// -------- Latest News ----------
Route::get('/blog_Default', function () {
    return view('latestNews.blog_Default');
});

Route::get('/blog_GridView', function () {
    return view('latestNews.blog_GridView');
});

Route::get('/blog_ListView', function () {
    return view('latestNews.blog_ListView');
});

Route::get('/blog_SinglePost', function () {
    return view('latestNews.blog_SinglePost');
});


// -------- Projects ----------
Route::get('/projects_GridView', function () {
    return view('projects.projects_GridView');
});

Route::get('/grid_withText', function () {
    return view('projects.grid_withText');
});

Route::get('/projects_GalleryStyle', function () {
    return view('projects.projects_GalleryStyle');
});

Route::get('/projects_SinglePost', function () {
    return view('projects.projects_SinglePost');
});


// -------- Shop ----------
Route::get('/shop_Products', function () {
    return view('shop.shop_Products');
});

Route::get('/single_Product', function () {
    return view('shop.single_Product');
});

Route::get('/shoppingCart', function () {
    return view('shop.shoppingCart');
});

Route::get('/checkOut', function () {
    return view('shop.checkOut');
});

Route::get('/myAccount', function () {
    return view('shop.myAccount');
});


// -------- ContactUs ----------
Route::get('/contactUs', function () {
    return view('contactUs.contactUs');
});