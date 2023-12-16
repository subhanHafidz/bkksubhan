<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class DetailController extends Controller
{
    public function index()
    {
        $data['perusahaan'] = Perusahaan::all();
        
        return view('tampilan.detail',$data);
    }

    public function show()
    {
        $data['perusahaan'] = Perusahaan::all();
  
        return view('tampilan.detail',$data);

    }

    
  
  
}
