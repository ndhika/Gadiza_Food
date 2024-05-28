<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): view
    {
    $abouts = About::latest()->first;
    return view('/admin/aboutAdmin/tambah_about', compact('about'));
    }
}