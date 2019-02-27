<?php

Route::set('index.php',function()
{
    ViewController::CreateView('index');
});

Route::set('Login',function()
{
    ViewController::CreateView('Login'); 
});

Route::set('Register',function()
{
    ViewController::CreateView('Register'); 
});

Route::set('postOffer',function()
{
    ViewController::CreateView('postOffer'); 
});

Route::set('search',function()
{
    ViewController::CreateView('search'); 
});

Route::set('LoginController',function()
{
    LoginController::LogIn();
});

Route::set('RegisterController',function()
{
    RegisterController::SignUp();
});