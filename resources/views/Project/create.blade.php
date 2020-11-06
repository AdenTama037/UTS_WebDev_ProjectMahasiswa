@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Project Mahasiswa

        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Add Project</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="namaproject" class="col-sm-2 col-form-label">Nama project</label>
                <div class="col-sm-10">
                    <input type="text" name="namaproject" class="form-control" id="namaproject" placeholder="Nama project">
                </div>
            </div>
            <div class="form-group row">
                <label for="nimproject" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="nimproject" class="form-control" id="nimproject" placeholder="Nama Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="judulskripsiproject" class="col-sm-2 col-form-label">Deskripsi Project</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="judulskripsiproject" rows="8" cols="80" placeholder="Masukkan Judul Skripsi"></textarea>
                    </div>
            </div>

            <!--<div class="form-group row">
                <label for="gambarproject" class="col-sm-2 col-form-label">Pilih gambar</label>
                <div class="col-sm-10">
                    <input type="file" name="gambarproject">
                <p class="text-danger">{{ $errors->first('gambarproject') }}</p>
                </div>
            </div>-->

             <hr>
                <div class="form-group">
                    <a href="{{route('project.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>

    </div>
    </body>
</html>

@endsection
