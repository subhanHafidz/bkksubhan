<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    function show(){
        $data['pendaftaran'] = Pendaftaran::all();
  
        return view('pendaftaran', $data);
      }

    function add(){
        $data =[
            'action'=>url('pendaftaran/create'),
            'tombol'=>'simpan',
            'pendaftaran'=>(object)[
                'nis'=>'',
                'nama'=>'',
                'jk'=>'',
                'jurusan'=>'',
                'tgl_lahir'=>'',
                'alamat'=>'',
                'telepon'=>'',
                'thn_ajaran'=>'',
                'posisi'=>'',
                'foto'=>'',
                'foto1'=>'',
                'cv'=>'',
                'skck'=>''
            ]
            ];
            return view('daftar',$data);
    }

    function create(Request $request){
        Pendaftaran::create([
            'nis'=> $request->nis,
            'email'=> $request->email,
            'password'=> $request->password,
            'nama'=> $request->nama,
            'jk'=> $request->jk,
            'jurusan'=> $request->jurusan,
            'tgl_lahir'=> $request->tgl_lahir,
            'alamat'=> $request->alamat,
            'telepon'=> $request->telepon,
            'thn_ajaran'=> $request->thn_ajaran,
            'foto'=>  $request->file('foto')->store('foto'),
            'foto1'=>  $request->file('foto1')->store('foto1'),
            'cv'=>  $request->file('cv')->store('cv'),
            'skck'=>  $request->file('skck')->store('skck')
        ]);
        return redirect('pendaftaran');
    }
    
    function delete($id){
        Perusahaan::where('id',$id)->delete();
        return redirect('pendaftaran');
    }

    

  

}
