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