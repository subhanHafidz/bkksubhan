@extends('template')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

   
</head>
<body>
    
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">Detail Formulir</h2>
                {{-- <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                    I am wise, so I am changing myself.</h5> --}}
            </div>
            <div class="card-header">
                <div class="card-body">
                    <table class="table table-hover">
                        <form action="pendaftaran/create" method="post"  class="php-email-form">
                            @csrf
                        <tr>
                            <th>Nomer Pendaftaran : </th>
                            <td>REG-2023-{{ str_pad($alumni->id, 5, '0', STR_PAD_LEFT) }}</td>
                        </tr>
                        <tr>
                            <th>Foto </th>
                            <td> <img src="/storage/{{ $alumni->foto }}" alt="" width="100"></td>
                        </tr>
                        <tr>
                            <th>Nama Pendaftar : </th>
                            <td>{{ $alumni->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir: </th>
                            <td>{{ $alumni->tgl_lahir}},
                                {{ \Carbon\Carbon::parse($alumni->tgl_lahir)->format('d - F - Y') }}</td>
                        </tr>
                        <tr>
                            <th>Nis: </th>
                            <td> {{ $alumni->nis }}</td>
                        </tr>
    
                        <tr>
                            <th>Jenis Kelamin : </th>
                            <td> {{ $alumni->jk }}</td>
                        </tr>
    
                        <tr>
                            <th>Jurusan </th>
                            <td> {{ $alumni->jurusan }}</td>
                        </tr>
                        <tr>
                            <th>Alamat : </th>
                            <td> {{$alumni->alamat  }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Ajaran : </th>
                            <td> {{$alumni->thn_ajaran  }}</td>
                        </tr>
                        <tr>
                            <th>Posisi :</th>
                            <td>    <input type="text" name="posisi" id="posisi" class="form-control" value="" placeholder="Masukan Posisi yang akan di lamar "></td>
                        </tr>
                        <tr>
                            <th>Telepon </th>
                            <td> {{ $alumni->telepon  }}</td>
                        </tr>
                        <tr>
                            <th>Foto Ijazah </th>
                            <td> <img src="/storage/{{ $alumni->foto1 }}" alt="" width="100"></td>
                        </tr>
                        <tr>
                            <th>CV </th>
                            <td><input type="File" name="cv" id="cv"  class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Foto skck </th>
                            <td> <img src="/storage/{{ $alumni->skck }}" alt="" width="100"></td>
                        </tr>
                        <div class="mb-2">
                            <td colspan="2" align="center">    
                                <input class="btn btn-primary" type="submit"  style="width: 100%">
                            </td>
                        </div>
    
                      
                    </table>
                </div>
            </form>
            </div>
            
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

