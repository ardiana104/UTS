<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petani;

class Petani1Controller extends Controller
{
    public function index()
    {
        // $petanis = Petani::paginate(10);
        $petanis = Petani::all();
        return view('daftarpetani', compact('petanis'));
    }
}
