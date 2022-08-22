<?php

namespace App\Http\Controllers\Api;
use App\Models\Kamar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\KamarResource;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::latest()->paginate(5);

        return new KamarResource(true, 'List Data Posts', $kamar);
    }

    
    public function store(Request $request)
    {
        //define valid  ation rules
        $validator = Validator::make($request->all(), [
            'tipe'     => 'required',
            'harga'     => 'required',
            'jumlah'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $datakamar = Kamar::create([
            'tipe'     => $request->tipe,
            'harga'     => $request->harga,
            'jumlah'   => $request->jumlah,
        ]);

        //return response
        return new KamarResource(true, 'Data Post Berhasil Ditambahkan!', $datakamar);
    }

    public function show(Kamar $kamar)
    {
        //return single post as a resource
        return new kamarResource(true, 'Data Post Ditemukan!', $kamar);
    }


    public function update(Request $request, Kamar $kamar)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'tipe'     => 'required',
            'harga'     => 'required',
            'jumlah'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $kamar->update([
            'tipe'     => $request->tipe,
            'harga'     => $request->harga,
            'jumlah'   => $request->jumlah,
        ]);

        //return response
        return new KamarResource(true, 'Data Post Berhasil Diubah!', $kamar);
    }

    public function destroy(Kamar $kamar)
    {
       
        //delete post
        $kamar->delete();

        //return response
        return new KamarResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
