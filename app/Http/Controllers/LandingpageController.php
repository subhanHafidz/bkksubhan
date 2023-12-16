<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class LandingpageController extends Controller
{
    public function index()
    {
        $data['perusahaan'] = Perusahaan::all();
        
        return view('landingPage',$data);
    }

    public function show()
    {
        $data['perusahaan'] = Perusahaan::all();
  
        return view('landingPage',$data);

    }
}
