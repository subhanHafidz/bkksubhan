<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>form alumni</title>
        <link href="img/log.png" rel="icon">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    @extends('tampilan.bkk')
    @section('content')
    <body>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-600">Alumni-Input</h1>
    </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-bold text-primary">Input Data Alumni</h6>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <div class="mb-2">
                                    <label for="" class="form-label">NIS</label>
                                    <input type="text" name="nis" id="nis" class="form-control" value="{{ $alumni->nis }}" placeholder="Masukan Nis">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $alumni->email }}" placeholder="Masukan Email">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="{{ $alumni->password }}" placeholder="Masukan Password">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $alumni->nama }}" placeholder="Masukan Nama ">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        <option value="Laki-laki" {{ $alumni->jk=='Laki-laki'?'selected':'' }} >Laki-laki</option>
                                        <option value="Perempuan" {{ $alumni->jk=='Perempuan'?'selected':'' }} >Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        <option value="RPL" {{ $alumni->jurusan=='RPL'?'selected':'' }} >RPL</option>
                                        <option value="TKJ" {{ $alumni->jurusan=='TKJ'?'selected':'' }} >TKJ</option>
                                        <option value="MM" {{ $alumni->jurusan=='MM'?'selected':'' }} >MM</option>
                                        <option value="DPIB" {{ $alumni->jurusan=='DPIB'?'selected':'' }} >DPIB</option>
                                        <option value="Teklin" {{ $alumni->jurusan=='Teklin'?'selected':'' }} >Teklin</option>
                                        <option value="TBSM" {{ $alumni->jurusan=='TBSM'?'selected':'' }} >TBSM</option>
                                        <option value="TKRO" {{ $alumni->jurusan=='TKRO'?'selected':'' }} >TKRO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="mb-2">
                                    <label for="" class="form-label">Tanggal lahir</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $alumni->tgl_lahir }}" placeholder="Masukan Tanggal Lahir ">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alumni->alamat }}" placeholder="Masukan Alamat">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Telepon</label>
                                    <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $alumni->telepon }}" placeholder="Masukan Telepon">
                                </div> 
                                <div class="mb-2">
                                    <label for="" class="form-label">Tahun Ajaran</label>
                                    <input type="text" name="thn_ajaran" id="thn_ajaran" class="form-control" value="{{ $alumni->thn_ajaran }}" placeholder="Masukan Tahun Ajaran ">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Foto 3x4</label>
                                    <input type="File" name="foto" id="foto"  class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Foto Ijazah</label>
                                    <input type="File" name="foto1" id="foto1"  class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Foto SKCK</label>
                                    <input type="File" name="skck" id="skck"  class="form-control">
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