<?php

Route::set('home',function()
{
    Home::CreateView();
});

Route::set('login',function()
{
    echo "login";
});