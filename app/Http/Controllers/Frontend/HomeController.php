<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
 
         return view('welcome');

    }

    public function about()
    {
         return view('about');

    }
}