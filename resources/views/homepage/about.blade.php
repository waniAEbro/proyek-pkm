@extends("layout.main")

@section ("main")
<div class="wrapper">
    <div class="page-header clear-filter home-header" style="overflow: unset">
        <div class="page-header-image" data-parallax="true" style="background-image: url('https://drive.google.com/uc?export=view&id=1RoLc6VuXj7AepMTCtjY1UGqTRd0FwL7S'); filter : brightness(100%);"></div>
    <!-- Menghilangkan filter color, merubah benner-->


        <div class="container d-flex align-items-center">
        <div class="row align-items-center">
            <div class="col" style="text-align: start!important;">
            <h3><strong>Rumah Kompetisi</strong></h3> 
            <p>Penyedia Platoform Belajar Bagi Mahasiswa</p>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-lg-4">
            <img src="https://img.freepik.com/free-photo/portrait-young-asia-lady-with-positive-expression-arms-crossed-smile-broadly-dressed-casual-clothing-looking-camera-pink-background_7861-3201.jpg?t=st=1656720589~exp=1656721189~hmac=b5a386e7f63952a0c7f3cda3f92d9903eb5f1844085dc84f772b032e3669e41d&w=1380" alt="">
            <h4 class="text-center"><strong>Rahman Surahman</strong></h4>
            <p class="text-center">Co-Founder Rumah Kompetisi</p>
        </div>
        <div class="col-lg-1 d-flex justify-content-center">
            <div style="width: 1px; background-color : black; height:100%;"></div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
            <div>
                <h1><strong>Rumah Kompetisi</strong></h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem officia odio, cum animi optio, nihil vero ipsam unde debitis natus laudantium esse. Ex asperiores animi libero adipisci tempora quisquam blanditiis velit laborum impedit repellendus, porro eaque dolore quas minus voluptatibus nemo consequuntur doloribus, accusamus rem. Architecto ea consectetur reiciendis in?
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div>
                <h4><strong>Visi</strong></h4>
                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia natus sequi commodi numquam dolorum dicta atque ab maiores eveniet laudantium.</p>
            </div>
            <div>
                <h4><strong>Misi</strong></h4>
                <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia natus sequi commodi numquam dolorum dicta atque ab maiores eveniet laudantium.</p>
            </div>
            <div>
                <h4 class="text-center"><strong>Kontak</strong></h4>
                <div class="d-flex justify-content-around">
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
        <div class="col-lg-6">
            <h4 class="text-center"><strong>FAQ</strong></h4>

            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse overflow-auto scroll-hilang" style="max-height: 500px">
            @foreach($pertanyaan as $item)
            <div class="card p-3 card-plain border border-gray-500">
                <a class="collapsed text-decoration-none text-center" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$item->id}}" aria-expanded="false" aria-controls="collapse{{$item->id}}">
                <div class="card-header" role="tab" id="heading{{$item->id}}">
                    {{$item->pertanyaan}}
            
                </div>
                </a>
                <div id="collapse{{$item->id}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$item->id}}">
                <div class="card-body">
                    {{$item->jawaban}}
                </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
