<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('front.company.index');
    }

    public function details()
    {
        return view('front.company.detail');
    }
}
