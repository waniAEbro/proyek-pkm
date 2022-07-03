@extends('layout.main')

@section('main')
<div class="container">
    <div class="col-sm-6">
        <img style="max-width: 35vw;" class="img" src="https://drive.google.com/file/d/1czQc83UhJ1LxJIbR2H_ewCDA5Vpi-x-T/view?usp=sharing" alt="">
    </div>    
    <div class="col-sm-6">
        <a href="/">Kembali</a>
        <h2>{{$item->nama}}</h2>
        <p class="d-inline">Diskon {{$item->diskon}} %</p>
        <h4 class="m-0"><strong>{{$item->nama}}</strong></h4>
        <p>{{$item->masa}} Bulan</p>
        <h5><s>Rp {{$item->harga_lama}} ,-</s></h5>
    </div>
</div>
@endsection
@section('javascript')

@endsection