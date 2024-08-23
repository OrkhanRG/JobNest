<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        return view('front.resume.index');
    }

    public function details()
    {
        return view('front.resume.detail');
    }
}
