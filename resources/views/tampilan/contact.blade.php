<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dokument</title>
        <link href="img/log.png" rel="icon">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    @extends('tampilan.bkk')
    @section('content') 
    <body>
        <div class="container mt-3">
            <div class="text-center mt-3 mb-3">
            </div>
            <div class="card" id="">
                <div class="card-header text-center">
                <h4>My Contact</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive py-3 text-center justify-content-center">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            @foreach ($contact as $item )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->pesan }}</td>
                                <td class="col-4 text-center">
                                    <a href="contact/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    @endsection
</body>
</html>