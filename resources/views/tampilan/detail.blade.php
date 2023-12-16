@extends('template')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/sty">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
   
        <div class="container mb-5 bg-transparent mt-5 pt-5" style="width: 80rem ;">
          <div class="row">
            @foreach ($perusahaan as $item) 
            <div class="col-md-6">
              <div class="text-center">
                 <img src="/storage/{{$item->foto}}" alt="" srcset="" width="400" height="400">
              </div>
            </div>
            <div class="container">
              <div class="row">
            <div class="col-md-8">
              <div class="text-light">
                <div class="mt-4 text-black">
                  <h3>DESKRIPSI</h3>
                  <p>{{$item->deskripsi}}</p>
                </div>
               
                {{-- <h1 class="fw-bold">{{$product->nama_barang}}</h1>
                <h3>Harga</h3> --}}
                {{-- <h3>Rp. {{$perusahaan->harga}} </h3> --}}
                {{-- <button  type="button" class="btn btn-outline-primary">
                  <a href="https://api.whatsapp.com/send?phone=+622321506368&text=%22halloo%22"> beli sekarang</a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>
                    
              </button> --}}
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                  
          
     
</body>
</html>

