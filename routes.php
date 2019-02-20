<?php

Route::set('Home',function()
{
    Home::CreateView('Home');
});

Route::set('Login',function()
{
    Login::CreateView('Login'); 
});

Route::set('Register',function()
{
    Login::CreateView('Register'); 
});