<?php

namespace App\Http\Controllers\Api;
use App\Models\Sarana;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SaranaResource;
use Illuminate\Support\Facades\Validator;

class SaranaController extends Controller
{
    public function index()
    {
        $sarana = Sarana::with('kamar')->get();

        //return collection of posts as a resource
        return new SaranaResource(true, 'List Data Posts', $sarana);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'keterangan'     => 'required',
            'kamar_id'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $datasarana = Sarana::create([
            'nama'     => $request->nama,
            'keterangan'     => $request->keterangan,
            'kamar_id'   => $request->kamar_id,
        ]);

        //return response
        return new SaranaResource(true, 'Data Post Berhasil Ditambahkan!', $datasarana);
    }

    public function show($datasarana)
    {
        //return single post as a resource
        $sarana = Sarana::with('kamar')->where('id', $datasarana)->first();
        return new SaranaResource(true, 'Data Post Ditemukan!', $sarana);
    }
    
    public function update(Request $request, Sarana $sarana)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'keterangan'     => 'required',
            'kamar_id'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $sarana->update([
            'nama'     => $request->nama,
            'keterangan'     => $request->keterangan,
            'kamar_id'   => $request->kamar_id,
        ]);

        //return response
        return new SaranaResource(true, 'Data Post Berhasil Diubah!', $sarana);
    }

    public function destroy(Sarana $sarana)
    {
       
        //delete post
        $sarana->delete();

        //return response
        return new SaranaResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
