@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Detail project</h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="namaproject" class="col-sm-2 col-form-label">Nama project</label>
            <div class="col-sm-10">
                {{$project->namaproject}}
            </div>
        </div>
        <div class="form-group row">
            <label for="nimproject" class="col-sm-2 col-form-label">NIM project</label>
            <div class="col-sm-10">
                {{$project->nimproject}}
            </div>
        </div>
        <div class="form-group row">
            <label for="angkatanproject" class="col-sm-2 col-form-label">Angkatan project</label>
            <div class="col-sm-10">
                 {{$project->angkatanproject}}
            </div>
        </div>
        <div class="form-group row">
            <label for="judulskripsiproject" class="col-sm-2 col-form-label">Judul Skripsi</label>
                <div class="col-sm-10">
                    {{$project->judulskripsiproject}}
                </div>
        </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('project.index')}}" class="btn  btn-success">Kembali</a>
            </div>
        </div>

    </div>
</body>
</html>

@endsection
