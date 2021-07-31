@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<div class='card'>
    <div class='cardbody'>
        <h3> Images :{{ $produks['gambar'] }} </h3>
        <h3> Nama Produk :{{ $produks['nama'] }} </h3>
        <h3> Keterangan :{{ $produks['ket'] }} </h3>
        <h3> Harga :{{ $produks['harga'] }} </h3>
    </div>
</div>
@endsection
