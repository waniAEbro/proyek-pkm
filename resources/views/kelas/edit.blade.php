@extends("layout.dashboard")

@section("main")
    <form action="/kelas/{{$kelas->id}}" method="post">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="namaKelas">Nama</label>
            <input type="text" class="form-control" required name="nama" value="{{$kelas->nama}}" id="namaKelas" placeholder="ex : kelas inggris">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="diskon">Diskon</label>
            <input type="text" class="form-control" id="diskon" name="diskon" value="{{$kelas->diskon}}" placeholder="ex : 80">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
        </div>
        <div class="form-group">
            <label for="pelajar">Pelajar</label>
            <input type="text" class="form-control" id="pelajar" value="{{$kelas->pelajar}}" name="pelajar" placeholder="ex : 10 Langsung">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="slogan">Slogan</label>
            <input type="text" class="form-control" id="slogan" name="slogan" value="{{$kelas->slogan}}" placeholder="ex : Cermat Mendetail Sampai ke Inggris">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
        </div>
        <div class="form-group">
            <label for="masa">Masa</label>
            <input type="number" class="form-control" required id="masa" name="masa" value="{{$kelas->masa}}" placeholder="ex : 12">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="harga_lama">Harga Sebelum Diskon</label>
            <input type="text" class="form-control" id="harga_lama" name="harga_lama" value="{{$kelas->harga_lama}}" placeholder="ex : 12.000">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib apabila diskon diisi</small>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" required id="harga" name="harga_baru" value="{{$kelas->harga_baru}}" placeholder="ex : 15.000">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="background">Link Gambar Background</label>
            <input type="text" class="form-control" id="background" name="background" value="{{$kelas->background}}" placeholder="ex : https://shopee.co.id/STIKER-BEBAS-GAMBAR-APA-AJA-i.120325226.3434298369">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
        </div>
        <div class="form-group">
            <label for="instansi">Link Gambar Institusi</label>
            <input type="text" class="form-control" id="instansi" name="instansi" value="{{$kelas->instansi}}" placeholder="ex : https://shopee.co.id/STIKER-BEBAS-GAMBAR-APA-AJA-i.120325226.3434298369">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
        </div>
        @if($fasilitas->isNotEmpty())<label class="d-block">Fasilitas</label>@endif
        <div class="form-group row gap-2">
            @foreach($fasilitas as $item)
            <div class="form-check col-3">
                <label class="form-check-label">
                <input class="form-check-input text-truncate" type="checkbox" {{ ($kelas->fasilitas->contains("id", $item->id)) ? "checked" : "" }} id="{{$item->id}}" name="fasilitas[]" value="{{$item->id}}"> {{$item->fasilitas}}
                <span class="form-check-sign"></span>
                </label>
            </div>
            @endforeach
        </div>
        @if($pembelajaran->isNotEmpty())<label class="d-block">Pembelajaran</label>@endif
        <div class="form-group row gap-2">
            @foreach($pembelajaran as $item)
            <div class="form-check col-3">
                <label class="form-check-label">
                <input class="form-check-input text-truncate" type="checkbox" id="{{$item->id}}" {{ ($kelas->pembelajaran->contains("id", $item->id)) ? "checked" : "" }} name="pembelajaran[]" value="{{$item->id}}"> {{$item->pembelajaran}}
                <span class="form-check-sign"></span>
                </label>
            </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" required name="deskripsi_singkat" id="exampleFormControlTextarea1" rows="1">{{$kelas->deskripsi_singkat}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Edit Kelas</button>
    </form>
@endsection