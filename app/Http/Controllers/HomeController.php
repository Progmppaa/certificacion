<?php

namespace App\Http\Controllers;
use App\Models\Document;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Document::get();
        return view('pages.admin.index', compact('data'));
    } 
}
