@extends("layout.main")

@section("main")
<div class="wrapper">
    <div class="page-header clear-filter home-header" style="overflow: unset">
        <div class="page-header-image" data-parallax="true" style="background-image: url('https://drive.google.com/uc?export=view&id=1VFRx4qyUwBoqcEgYbu_MdhvibOB04xSE'); filter : brightness(100%);"></div>
            <!-- Menghilangkan filter color, merubah benner-->
        <div class="container d-flex align-items-center">
            <div class="col" style="text-align:left">
                <h2><strong>Rumah Kompetisi</strong></h2>
                <p>Platform Pembelajaran Mahasiswa</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"style="text-align: center">
                            <img style="max-width: 30vw;" class="img" src="https://akcdn.detik.net.id/community/media/visual/2020/08/14/jerome-polin-15_43.jpeg?w=700&q=90" alt="">
                            <h5 ><strong>Saya Founder</strong></h5>
                        </div>
                        <div class="col-md-6">
                            <h3><strong>Rumah Kreatifitas</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, voluptatum.</p> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6" style="line-height:5px">
                            <h3><strong>Visi</strong></h3>
                            <p>Visi berasal dari kata vision dalam bahasa Inggris yang berarti pandangan jauh ke depan. 
                                Visi sebuah organisasi memiliki pengertian  pandangan umum dari cita-cita yang ingin diwujudkan dari organisasi tersebut.
                            </p>
                            <h3><strong>Misi</strong></h3>
                            <p style="padding-bottom: 10px">Misi merupakan rangkaian kegiatan utama yang harus dilakukan organisasi untuk mencapai visinya. Misi akan menentukan arah serta batasan proses pencapaian tujuan. Dengan kata lain, misi adalah 
                                langkah yang harus diambil sebuah organisasi dalam mewujudkan visi.
                            </p>                            
                        </div>
                        <div class="col-md-6" style="text-align: center">
                            <h3><strong>FAQ</strong></h3>
                            <p>Disini diisi accordion</p>                          
                        </div>
                    </div>
                    <div class="row" style="text-align: center">
                        <div class="col-md-6" style="text-align: center">
                            <h3><strong>Contact us</strong></h3>
                            <div class="container">
                                <div class="row">
                                  <div class="col">
                                    Gmail
                                  </div>
                                  <div class="col">
                                    Whatsapp
                                  </div>
                                  <div class="col">
                                    Telegram
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
