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
        return view('introduction.overview');
    }

    /**
     * Show the site detail
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail()
    {
        return view('introduction.detail');
    }
}
