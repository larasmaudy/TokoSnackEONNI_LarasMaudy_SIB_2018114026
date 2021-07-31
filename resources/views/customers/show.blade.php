@extends('layouts.app')

@section('title', 'Pelanggan')

@section('content')
<div class='card'>
    <div class='cardbody'>
        <h3> Nama Pelanggan :{{ $customers['mnp'] }} </h3>
        <h3> Total Pesanan :{{ $customers['total_pesan'] }} </h3>
        <h3> Alamat :{{ $customers['alamat'] }} </h3>
        <h3> No Tlp :{{ $customers['notlp'] }} </h3>
    </div>
</div>
@endsection
