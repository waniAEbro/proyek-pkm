@extends("layout.dashboard")

@section("main")
    <form action="/platinum/{{$platinum->id}}" method="post">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="namaplatinum">Nama</label>
            <input type="text" class="form-control" required name="nama" value="{{$platinum->nama}}" id="namaplatinum" placeholder="ex : platinum inggris">
        </div>
        <div class="form-group">
            <label for="diskon">Diskon</label>
            <input type="text" class="form-control" id="diskon" name="diskon" value="{{$platinum->diskon}}" placeholder="ex : 80">
        </div>
        <div class="form-group">
            <label for="masa">Masa</label>
            <input type="number" class="form-control" required id="masa" name="masa" value="{{$platinum->masa}}" placeholder="ex : 12">
            <small class="form-text text-muted"><span class="text-danger">*</span>dalam bulan</small>
        </div>
        <div class="form-group">
            <label for="harga_lama">Harga Sebelum Diskon</label>
            <input type="text" class="form-control" id="harga_lama" name="harga_lama" value="{{$platinum->harga_lama}}" placeholder="ex : 12.000">
            <small class="form-text text-muted"><span class="text-danger">*</span>kosongkan bila tidak ada diskon</small>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" required id="harga" name="harga_baru" value="{{$platinum->harga_baru}}" placeholder="ex : 15.000">
            <small class="form-text text-muted"><span class="text-danger">*</span>bisa diberi titik</small>
        </div>
        <div class="form-group">
            <label for="background">Link Background</label>
            <input type="text" class="form-control" id="background" name="background" value="{{$platinum->background}}" placeholder="ex : https://shopee.co.id/STIKER-BEBAS-GAMBAR-APA-AJA-i.120325226.3434298369">
            <small class="form-text text-muted"><span class="text-danger">*</span>isi dengan link gambar</small>
        </div>
        <div class="form-group">
            <label for="instansi">Link Institusi</label>
            <input type="text" class="form-control" id="instansi" name="instansi" value="{{$platinum->instansi}}" placeholder="ex : https://shopee.co.id/STIKER-BEBAS-GAMBAR-APA-AJA-i.120325226.3434298369">
            <small class="form-text text-muted"><span class="text-danger">*</span>isi dengan link gambar</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" required name="deskripsi_singkat" id="exampleFormControlTextarea1" rows="1">{{$platinum->deskripsi_singkat}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Tambah platinum</button>
    </form>
@endsection