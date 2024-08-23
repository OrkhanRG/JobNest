<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('front.job.index');
    }

    public function details()
    {
        return view('front.job.detail');
    }
}
