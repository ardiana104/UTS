<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPanenModel;

class HasilPanenController extends Controller
{
    public function index()
    {
        return view('HasilPanen');
    }
}
