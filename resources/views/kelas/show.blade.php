@extends("layout.main")

@section("main")
<div class="wrapper">
    <div class="page-header clear-filter home-header" style="overflow: unset">
        <div class="page-header-image" data-parallax="true" style="background-image: url('https://drive.google.com/uc?export=view&id=1RoLc6VuXj7AepMTCtjY1UGqTRd0FwL7S'); filter : brightness(100%);"></div>
    <!-- Menghilangkan filter color, merubah benner-->
    
    
        <div class="container d-flex align-items-center">
            <div class="row align-items-center" style="width: 100%">
                <div class="col-8" style="text-align: start!important;">
                    <h3><strong>{{$kelas->nama}}</strong></h3> 
                    <p>{{$kelas->slogan}}</p>
                </div>
                    <!--menambah tulisan-->
        
                <div class="position-relative col-4 hilang" style="left: 8vw; top: 15vh;">
                    <img style="max-width: 20vw;" class="img" src="https://drive.google.com/uc?export=view&id=1czQc83UhJ1LxJIbR2H_ewCDA5Vpi-x-T" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row g-4">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="mt-3 mb-3">
                        <h6>
                            Deskripsi
                        </h6>
                        <p>
                            {{$kelas->deskripsi_singkat}}
                        </p>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6>
                            Fasilitas
                        </h6>
                        <ul class="list-group">
                            @foreach($kelas->fasilitas as $item)
                                <li class="list-group-item">{{$item->fasilitas}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6>
                            Objek Pembelajaran
                        </h6>
                        <ul class="list-group">
                            @foreach($kelas->pembelajaran as $item)
                                <li class="list-group-item">{{$item->pembelajaran}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="text-danger"><strong>Rp {{$kelas->harga_baru}} ,-</strong></h4>
                    @if($kelas->harga_lama != null) <h4><s><strong>Rp {{$kelas->harga_lama}} ,-</strong></s></h4> @endif
                    <h6>Pelajar : {{$kelas->pelajar}}</h6>
                    <a href="https://api.whatsapp.com/send?phone=6285172436901&text=kelas%20{{$kelas->id}}"><button class="btn btn-primary">Beli</button></a>
                    <p>share</p>
                    <a href="https://api.whatsapp.com/send?text=http://www.google.com/"><button class="btn btn-primary btn-icon btn-round">
                        <i class="fa-brands fa-whatsapp"></i>
                    </button></a>
                    <a href="http://www.twitter.com/share?url=http://www.google.com/"><button class="btn btn-primary btn-icon btn-round">
                        <i class="fa-brands fa-twitter"></i>
                    </button></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.google.com"><button class="btn btn-primary btn-icon btn-round">
                        <i class="fa-brands fa-facebook-f"></i>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection