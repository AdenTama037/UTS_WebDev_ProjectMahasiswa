@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Alumni</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit Data Alumni</h3>
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
        
        <form action="{{route('project.update',$project->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="namaproject" class="col-sm-2 col-form-label">Nama project</label>
                <div class="col-sm-10">
                    <input type="text" name="namaproject" class="form-control" id="namaproject" value="{{$project->namaproject}}" placeholder="Nama project">
                </div>
            </div>
            <div class="form-group row">
                <label for="nimproject" class="col-sm-2 col-form-label">NIM project</label>
                <div class="col-sm-10">
                    <input type="text" name="nimproject"  class="form-control" id="nimproject" value="{{$project->nimproject}}" placeholder="NIM project">
                </div>
            </div>
            <div class="form-group row">
                <label for="angkatanproject" class="col-sm-2 col-form-label">Angkatan project</label>
                <div class="col-sm-10">
                    <select id="angkatanproject" name="angkatanproject"class="form-control">
                        <option {{$project->angkatanproject == '2012' ? 'selected' : ''}} value="2012"> Angkatan 2012</option>
                        <option {{$project->angkatanproject == '2013' ? 'selected' : ''}} value="2013"> Angkatan 2013</option>
                        <option {{$project->angkatanproject == '2014' ? 'selected' : ''}} value="2014"> Angkatan 2014</option>
                        <option {{$project->angkatanproject == '2015' ? 'selected' : ''}} value="2015"> Angkatan 2015</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="judulskripsiproject" class="col-sm-2 col-form-label">Judul Skripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="judulskripsiproject" rows="8" cols="80" placeholder="Masukkan Judul Skripsi">{{$project->judulskripsiproject}}</textarea>
                    </div>
            </div>
            <div class="form-group row">
                <label for="pembimbing1" class="col-sm-2 col-form-label">Pembimbing 1</label>
                <div class="col-sm-10">
                    <input type="text" name="pembimbing1" class="form-control" value="{{$project->pembimbing1}}" id="pembimbing1" placeholder="Pembimbing 1">
                </div>
            </div>
            <div class="form-group row">
                <label for="pembimbing2" class="col-sm-2 col-form-label">Pembimbing 2</label>
                <div class="col-sm-10">
                    <input type="text" name="pembimbing2" class="form-control" value="{{$project->pembimbing2}}" id="pembimbing2" placeholder="Pembimbing 2">
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
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection