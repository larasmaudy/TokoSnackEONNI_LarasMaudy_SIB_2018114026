@extends('layouts.app')

@section('title','Pelanggan')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-plus fa-sm text-white-50"></i>
Tambah Data Pelanggan</button>
<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text">DATA CUSTOMER</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive"> 
    <table class="table table-boarded" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Total Pesanan </th>
      <th scope="col">Alamat</th>
      <th scope="col">No Tlp</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>  
  <tbody>
  @foreach ($customers as $customer)
    <tr>
    <td>{!!$customer->nmp !!}</td>
    <td>{!!$customer->total_pesan !!}</td>
    <td>{!!$customer->alamat !!}</td>
    <td>{!!$customer->notlp !!}</td>
    
    <td><a href="/customers/{{$customer->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/customers/{{$customer->id}}" method="POST">
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
      <form action="/customers" method="POST">

          @csrf

  <div class="modal-body">   
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