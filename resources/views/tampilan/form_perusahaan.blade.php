<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dokument</title>
        <link href="img/log.png" rel="icon">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
    @extends('tampilan.bkk')
    @section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-600">Perusahaan-Input</h1>
    </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-bold text-primary">Input Data Perusahaan</h6>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $perusahaan->nama }}" placeholder="Masukan Nama Perusahaan ">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Telepon</label>
                                    <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $perusahaan->telepon }}" placeholder="Masukan Telepon">
                                </div> 
                                <div class="mb-2">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $perusahaan->alamat }}" placeholder="Masukan Alamat">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $perusahaan->deskripsi }}" placeholder="Masukan Deskripsi">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Tanggal Dibuat</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $perusahaan->tanggal }}" placeholder="Masukan Tanggal ">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">STATUS</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        <option value="AKTIF" {{ $perusahaan->status=='AKTIF'?'selected':'' }} >AKTIF</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Foto</label>
                                    <input type="File" name="foto" id="foto"  class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <td colspan="2" align="center">    
                                <input class="btn btn-primary" type="submit" value="{{ $tombol }}" style="width: 100%">
                            </td>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>
@endsection