<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasUmumController extends Controller
{
    public function index(){
        $data = FasilitasUmum::all();
        return view('admin.fasilitasumum', compact('data'));
    }
}
