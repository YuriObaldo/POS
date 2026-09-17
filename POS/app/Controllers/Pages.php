<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        return view('home', ['title' => 'Point of Sale']);
    }

    public function about(): string
    {
        return view('about', ['title' => 'About']);
    }
}
