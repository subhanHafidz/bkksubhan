<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['perusahaan'] = Perusahaan::all();
        
        return view('home',$data);
    }

    public function show()
    {
        $data['perusahaan'] = Perusahaan::all();
  
        return view('home ',$data);

    }

    
    function detail($id){
        $data['perusahaan'] = Perusahaan::find($id);
        return view('tampilan.detail', $data);
    }

}
