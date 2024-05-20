<?php

namespace App\Http\Controllers\frontend;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.index");
    }
};