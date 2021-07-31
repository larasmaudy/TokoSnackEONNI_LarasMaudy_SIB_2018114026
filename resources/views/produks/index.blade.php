@extends('layouts.app')

@section('title','Produk')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-plus fa-sm text-white-50"></i>
Tambah Produk</button>
<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text">DATA PRODUK</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive"> 
    <table class="table table-boarded" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nama Produk </th>
      <th scope="col">Keterangan</th>
      <th scope="col">Harga</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>  
  <tbody>
  @foreach ($produks as $produk)
    <tr>
    <td><img src="{{ url('gambar') }}/{{$produk['gambar']}}" width="150" heigh="200"></img></td>
    <td>{!!$produk->nama !!}</td>
    <td>{!!$produk->ket !!}</td>
    <td>{!!$produk->harga !!}</td>
    
    <td><a href="/produks/{{$produk->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/produks/{{$produk->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    
 </form>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/produks" method="POST">

          @csrf

  <div class="modal-body">   
  <div class="form-group">
    <label>Gambar</label>
    <input class="form-control" type="file" name="gambar" value="{{ old('gambar') }}" />
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Nama Produk</label>
    <input type="text" class="form-control" name="nama" id="exampleInputnama" >
    @error('nama')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputKet">Keterangan</label>
    <input type="text" class="form-control" name="ket" id="exampleInputket" >
    @error('ket')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputHarga">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputharga">
    @error('harga')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  </div>
    
      <div class="modal-footer">
        <button type ="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type ="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection