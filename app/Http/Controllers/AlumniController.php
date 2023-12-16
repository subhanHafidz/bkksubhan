<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    function show(){
        $data['alumni'] = Alumni::all();
        $data['pendaftaran'] = Pendaftaran::all();

        
        return view('tampilan.alumni', $data);
      }
     
    function add(){
        $data =[
            'action'=>url('alumni/create'),
            'tombol'=>'simpan',
            'alumni'=>(object)[
                'nis'=>'',
                'email'=>'',
                'password'=>'',
                'nama'=>'',
                'jk'=>'',
                'jurusan'=>'',
                'tgl_lahir'=>'',
                'alamat'=>'',
                'telepon'=>'',
                'thn_ajaran'=>'',
                'foto'=>'',
                'foto1'=>'',
                'skck'=>''
            ]
            ];
            return view('tampilan.form_alumni',$data);
    }

    function create(Request $request){
        Alumni::create([
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
            'skck'=>  $request->file('skck')->store('skck')
        ]);
        return redirect('alumni');
    }
    
    function delete($id){
        Alumni::where('id',$id)->delete();
        return redirect('alumni');
    }

    function edit($id){ 
        $data['alumni'] = Alumni::where('id', $id)->first();
        $data['action'] = url('alumni/update').'/'.$data['alumni']->id;
        $data['tombol'] = "Update";

        return view('tampilan.form_alumni',$data);
    }

    function update(Request $request){
        $data = Alumni::where('id',$request->id)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
            $foto1 =  $request->file('foto1')->store('foto1');
            $skck =  $request->file('skck')->store('skck');
        }
        Alumni::where('id', $request->id)->update([
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
            'skck'=>  $request->file('skck')->store('skck')
        ]);
        return redirect('alumni');
    }

    public function daftar()
    {
        $i = 1;
        $user = Auth::user();
        $alumni = Alumni::all()->first();
        if ($alumni) {
            return view('tampilan.daftar', compact('alumni', 'i', 'user'));
        } else {
            return back();
        }
    }
}