<?php

Route::set('index.php',function()
{
    Controller::CreateView('index');
});

Route::set('Login',function()
{
    Controller::CreateView('Login'); 
});

Route::set('Register',function()
{
    Controller::CreateView('Register'); 
});