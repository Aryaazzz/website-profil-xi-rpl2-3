<?php

namespace App\Http\Controllers;

use App\Models\harapanjaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HarapanController extends Controller
{


    public function index()
    {

        $data = harapanjaya::all();


        return view('kopdes.index',compact('data'));

    }




    public function create()
    {

        return view('kopdes.create');

    }





    public function store(Request $request)
    {


        $request->validate([

            'id_kopdes'=>'required|unique:_harapan_jaya',

            'nama_kopdes'=>'required',

            'nama_manager'=>'required',

            'tanggal_berdiri'=>'required',

            'alamat'=>'required',

            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);



        $gambar = null;



        if($request->hasFile('gambar')){


            $gambar = $request
            ->file('gambar')
            ->store('gambar_kopdes','public');


        }



        harapanjaya::create([


            'id_kopdes'=>$request->id_kopdes,

            'nama_kopdes'=>$request->nama_kopdes,

            'nama_manager'=>$request->nama_manager,

            'tanggal_berdiri'=>$request->tanggal_berdiri,

            'alamat'=>$request->alamat,

            'gambar'=>$gambar


        ]);



        return redirect()
        ->route('kopdes.index')
        ->with('success','Data berhasil ditambahkan');


    }





    public function edit($id)
    {


        $data = harapanjaya::findOrFail($id);


        return view('kopdes.edit',compact('data'));


    }





    public function update(Request $request,$id)
    {


        $data = harapanjaya::findOrFail($id);



        $request->validate([


            'nama_kopdes'=>'required',

            'nama_manager'=>'required',

            'tanggal_berdiri'=>'required',

            'alamat'=>'required',

            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:2048'


        ]);



        $gambar = $data->gambar;




        if($request->hasFile('gambar')){


            if($data->gambar){

                Storage::disk('public')
                ->delete($data->gambar);

            }


            $gambar = $request
            ->file('gambar')
            ->store('gambar_kopdes','public');


        }





        $data->update([


            'nama_kopdes'=>$request->nama_kopdes,

            'nama_manager'=>$request->nama_manager,

            'tanggal_berdiri'=>$request->tanggal_berdiri,

            'alamat'=>$request->alamat,

            'gambar'=>$gambar


        ]);





        return redirect()
        ->route('kopdes.index')
        ->with('success','Data berhasil diperbarui');



    }





    public function destroy($id)
    {


        $data = harapanjaya::findOrFail($id);



        if($data->gambar){

            Storage::disk('public')
            ->delete($data->gambar);

        }




        $data->delete();



        return redirect()
        ->route('kopdes.index')
        ->with('success','Data berhasil dihapus');


    }



}