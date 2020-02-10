<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;
class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::all();
        return view('gaji.index', compact('gaji'));
    }
    public function show($id)
    {
        $gaji = Gaji::find($id);
        return view('gaji.show', compact('gaji'));
    }
}