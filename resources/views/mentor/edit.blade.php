@extends("layout.dashboard")

@section("main")
    <form action="/mentor/{{$mentor->id}}" method="post">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="namaMentor">Nama</label>
            <input type="text" class="form-control" required name="nama" value="{{$mentor->nama}}" id="namaMentor" placeholder="ex : Rahman Surahman">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar" value="{{$mentor->gambar}}" placeholder="ex : ex : https://shopee.co.id/STIKER-BEBAS-GAMBAR-APA-AJA-i.120325226.3434298369">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" required name="deskripsi_singkat" id="exampleFormControlTextarea1" rows="1">{{$mentor->deskripsi_singkat}}</textarea>
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <button type="submit" class="btn btn-success">Edit Mentor</button>
    </form>
@endsection