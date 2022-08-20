<?php

namespace App\Http\Controllers\Api;
use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\FasilitasResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        //get posts
        $fasilitas = Fasilitas::latest()->paginate(5);

        //return collection of posts as a resource
        return new FasilitasResource(true, 'List Data Posts', $fasilitas);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_fasilitas'     => 'required',
            'keterangan'     => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kamar_id'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/fasilitas', $image->hashName());

        //create post
        $datafasilitas = Fasilitas::create([
            'nama_fasilitas'     => $request->nama_fasilitas,
            'keterangan'     => $request->keterangan,
            'image'     => $image->hashName(),
            'kamar_id'   => $request->kamar_id,
        ]);

        //return response
        return new FasilitasResource(true, 'Data Post Berhasil Ditambahkan!', $datafasilitas);
    }

    public function show(Fasilitas $fasilitas)
    {
        //return single post as a resource
        return new FasilitasResource(true, 'Data fasilitas Ditemukan!', $fasilitas);
    }

    public function update(Request $request, Fasilitas $datafasilitas)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama_fasilitas'     => 'required',
            'keterangan'     => 'required',
            'kamar_id'   => 'required',
            'image'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/fasilitas', $image->hashName());

            //delete old image
            Storage::delete('public/fasilitas/'.$datafasilitas->image);

            //update post with new image
            $datafasilitas->update([
                'nama_fasilitas'     => $request->nama_fasilitas,
                'keterangan'     => $request->keterangan,
                'kamar_id'   => $request->kamar_id,
                'image'   => $request->image,
            ]);

        } else {

            //update post without image
            $datafasilitas->update([
                'nama_fasilitas'     => $request->nama_fasilitas,
                'keterangan'     => $request->keterangan,
                'kamar_id'   => $request->kamar_id,
            ]);
        }

        //return response
        return new FasilitasResource(true, 'Data Post Berhasil Diubah!', $datafasilitas);
    }

}
