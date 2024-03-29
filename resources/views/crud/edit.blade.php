@extends('layouts.master')

@section('content')
            <h1>Edit data siswa</h1>
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                {{session('sukses')}}
                </div>
            @endif
            <div class="row">
            <div class="col-lg-12">
            <form action="/crud/{{$crud->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$crud->nama_depan}}">
            </div>            
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$crud->nama_belakang}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L" @if($crud->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                    <option value="P" @if($crud->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$crud->agama}}">
            </div>            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$crud->alamat}}</textarea>
            </div>       
            <button type="submit" class="btn btn-warning">Update</button>
            </form>
            </div>
        </div>
@endsection