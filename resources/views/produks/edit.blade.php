@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<form action="/produks/{{ $produks['id'] }}" method="POST">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label>Gambar</label>
    <input class="form-control" type="file" name="gambar" value="{{ old('gambar') }}" />
    <p class="form-text">Kosongkan jika tidak ingin mengubah gambar.</p>
    <img src="{{ $produks->gambar }}" height="75" />
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Nama Produk</label>
    <input type="text" class="form-control" name="nama" id="exampleInputnama" value="{{ old('nama') ? old('nama') : $produks['nama'] }}">
    @error('nama')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Keterangan</label>
    <input type="text" class="form-control" name="ket" id="exampleInputmk" value="{{ old('ket') ? old('ket') : $produks['ket'] }}">
    @error('ket')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputHarga">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputmk" value="{{ old('harga') ? old('harga') : $produks['harga'] }}">
    @error('harga')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection