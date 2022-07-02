@extends("layout.dashboard")

@section("main")
    <form action="/mentor/{{$mentor->id}}" method="post">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="namaMentor">Nama</label>
            <input type="text" class="form-control" required name="nama" value="{{$mentor->nama}}" id="namaMentor" placeholder="ex : Rahman Surahman">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar" value="{{$mentor->gambar}}" placeholder="ex : ex : https://shopee.co.id/STIKER-BEBAS-GAMBAR-APA-AJA-i.120325226.3434298369">
            <small class="form-text text-muted"><span class="text-danger">*</span>dalam bentuk link</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" required name="deskripsi_singkat" id="exampleFormControlTextarea1" rows="1">{{$mentor->deskripsi_singkat}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Tambah Mentor</button>
    </form>
@endsection