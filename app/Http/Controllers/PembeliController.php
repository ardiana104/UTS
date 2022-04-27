<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembeliModel;

class PembeliController extends Controller
{
    public function index()
    {
        return view('Pembeli');
    }
}
