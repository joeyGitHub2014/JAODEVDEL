<?php

namespace App\Http\Controllers\Frontend;


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
         return view('about');

    }
}