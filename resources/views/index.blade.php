@extends("layout.main")

@section("main")

<div class="wrapper">
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" data-parallax="true" style="background-image: url('https://drive.google.com/uc?export=view&id=1j4OQpis-dpF5efjQ9qaQfsclTIpTC4Wr'); filter : brightness(50%);"></div>
    <div class="container d-flex align-items-center">
      <div class="d-flex" style="text-align: start!important; max-width: 25vw!important;">
        <p>Belajar Riset dan Menulis Karya Ilmiah dengan Mudah serta Menyenangkan Membangun Ekosistem Keilmiahan dan Penelitian Untuk Mencetak Inovator Muda Indonesia</p>
      </div>
    </div>
  </div>
</div>
<div class="position-absolute" style="right: 20vw; z-index:1001; top: 25vh;">
  <img style="width: 20vw; border-radius: 10px;" src="https://drive.google.com/uc?export=view&id=1l1qCGKEVl6QyrueHDiIxzP54gpKxPmWQ" alt="">
</div>
<main class="container mt-5">
  <h1 style="margin-top: 135px!important; margin-bottom: 60px;!important" class="text-center">
    Rumah Kompetisi Class
  </h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col-md-4">
      <div class="card overflow-hidden" style="max-width: 20rem; border-radius: 20px; box-shadow: black">
        <div class="card-header bg-transparent">
          <i class="fa-solid fa-tags d-inline"></i>
          <p class="d-inline">Diskon 80 %</p>
        </div>
        <div class="card-body text-success">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent pl-3 pr-3">
          <div class="d-flex justify-content-between align-items-center">
            <a href="#">more</a>
            <a href="https://wa.me/085900221521" class="btn btn-primary">Beli</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card overflow-hidden" style="max-width: 20rem; border-radius: 10px;">
        <div class="card-body">
          <h5 class="card-title text-center bold"><strong>English Class</strong></h5>
          <p class="card-text">Ini deskripsi</p>
          <div class="d-flex justify-content-between align-items-center">
            <a href="#">more</a>
            <a href="https://wa.me/085900221521" class="btn btn-primary">Beli</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection