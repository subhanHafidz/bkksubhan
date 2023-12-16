<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
  
    
    function Contact(){
        $data['contact'] = Contact::all();
        return view('tampilan.contact', $data);
    }

    function add(){
        $data = [
            'action' => url('contact/create'),
            'tombol' => 'simpan',
            'contact' => (object)[
                'nama' => '',
                'email' => '',
                'password' => '',
            ],
        ];

        return view('home');
    }

    function create(Request $req){
        // $this -> validate($req, [
            // 'nama' => 'required|string',
            // 'email' => 'required|email',
            // 'pesan' => 'required|string',
        // ]);

        Contact::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'pesan' => $req->pesan,
        ]);

        return redirect('home');

    }

    function delete($id){
        Contact::Where('id', $id)->delete();

        return redirect('contactadmin');
    }

}
