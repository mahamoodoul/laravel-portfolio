<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function Home()
    {
        return view("home");
    }
    public function About()
    {
        return view("about");
    }
    public function Service()
    {
        return view("service");
    }
    public function Portfolio()
    {
        return view("portfolio");
    }
}
