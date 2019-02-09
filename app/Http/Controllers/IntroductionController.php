<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Show the overview
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function overview()
    {
        return view('overview');
    }
}
