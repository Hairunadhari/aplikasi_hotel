<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;

class FasilitasKamarController extends Controller
{
    public function index(){
        $data = FasilitasKamar::all();
        return view('admin.fasilitaskamar', compact('data'));
    }
}
