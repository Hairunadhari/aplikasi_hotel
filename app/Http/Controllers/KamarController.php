<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index(){
        $data = Kamar::all();
        return view('admin.kamar', compact('data'));
    }
}
