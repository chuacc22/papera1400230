<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function candidates()
    {
        return view('candidates.index');
    }

    public function candidate($id)
    {
        return view('candidate.data');
    }
}
