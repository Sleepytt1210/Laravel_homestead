<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Blog homepage
     */
    public function index() {
        return view('index.index');
    }
}
