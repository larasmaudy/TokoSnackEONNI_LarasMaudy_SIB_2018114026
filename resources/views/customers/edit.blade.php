@extends('layouts.app')

@section('title', 'Pelanggan')

@section('content')

<form action="/customers/{{ $customers['id'] }}" method="POST">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="exampleInputNama">Nama Pelanggan</label>
    <input type="text" class="form-control" name="nmp" id="exampleInputnama" value="{{ old('nmp') ? old('nmp') : $customers['nmp'] }}">
    @error('nmp')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Total Pesanan</label>
    <input type="text" class="form-control" name="total_pesan" id="exampleInputmk" value="{{ old('total_pesan') ? old('ket') : $customers['total_pesan'] }}">
    @error('total_pesan')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputHarga">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputmk" value="{{ old('alamat') ? old('alamat') : $customers['alamat'] }}">
    @error('alamat')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputHarga">No Tlp</label>
    <input type="text" class="form-control" name="notlp" id="exampleInputmk" value="{{ old('notlp') ? old('notlp') : $customers['notlp'] }}">
    @error('alamat')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection