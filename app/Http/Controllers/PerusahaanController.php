<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    
    function show(){
        $data['perusahaan'] = Perusahaan::all();
  
        return view('tampilan.perusahaan', $data);
      }

    function add(){
        $data =[
            'action'=>url('perusahaan/create'),
            'tombol'=>'simpan',
            'perusahaan'=>(object)[
                'nama'=>'',
                'telepon'=>'',
                'alamat'=>'',
                'deskripsi'=>'',
                'tanggal'=> '',
                'status'=> '',
                'foto'=>''
               
                
            ]
            ];
            return view('tampilan.form_perusahaan',$data);
    }

    function create(Request $request){
        Perusahaan::create([
            'nama'=> $request->nama,
            'telepon'=> $request->telepon,
            'alamat'=> $request->alamat,
            'deskripsi'=> $request->deskripsi,
            'tanggal'=> $request->tanggal,
            'status'=> $request->status,
            'foto'=>  $request->file('foto')->store('foto')
        ]);
        return redirect('perusahaan');
    }

    function delete($id_perusahaan){
        Perusahaan::where('id_perusahaan',$id_perusahaan)->delete();
        return redirect('perusahaan');
    }

    function edit($id_perusahaan){ 
        $data['perusahaan'] = Perusahaan::where('id_perusahaan', $id_perusahaan)->first();
        $data['action'] = url('perusahaan/update').'/'.$data['perusahaan']->id_perusahaan;
        $data['tombol'] = "Update";

        return view('tampilan.form_perusahaan',$data);
    }

    function update(Request $request){
        $data = Perusahaan::where('id_perusahaan',$request->id_perusahaan)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        Perusahaan::where('id_perusahaan', $request->id_perusahaan)->update([
                'nama'=> $request->nama,
                'telepon'=> $request->telepon,
                'alamat'=> $request->alamat,
                'deskripsi'=> $request->deskripsi,
                'tanggal'=> $request->tanggal,
                'status'=> $request->status,
                'foto'=>  $request->file('foto')->store('foto')
        ]);
        return redirect('perusahaan');
    }

    // function detail($id){
    //     $data['perusahaan'] = Perusahaan::find($id);
    //     return view('tampilan.detail', $data);
    // }
}
