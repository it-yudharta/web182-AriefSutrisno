@extends('layouts.master')

@section('content')
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <div class="col-6">
                <h1>Data Siswa</h1>
                </div>    
                <div class="col-6">
                        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Siswa
                        </button>
                </div>
                    <table class="table table-hover">
                        <tr>
                            <th>NAMA DEPAN</th>
                            <th>NAMA BELAKANG</th>
                            <th>JENIS KELAMIN</th>
                            <th>AGAMA</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                        @foreach($data_crud as $crud)
                        <tr>
                            <td>{{$crud->nama_depan}}</td>
                            <td>{{$crud->nama_belakang}}</td>
                            <td>{{$crud->jenis_kelamin}}</td>
                            <td>{{$crud->agama}}</td>
                            <td>{{$crud->alamat}}</td>
                            <td>
                                <td><a href="/crud/{{$crud->id}}/edit" class="btn btn-warning btn-sn">Edit</a>
                                <td><a href="/crud/{{$crud->id}}/delete" class="btn btn-danger btn-sn" onclick="return confirm('Yakin untuk dihapus?')">Delete</a>
                            </td>
                        </tr>  
                        @endforeach
                    </table>

            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
       <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
       </button>
       </div>
       <div class="modal-body">
            <form action="/crud/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
            </div>            
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
            </div>            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>       
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection