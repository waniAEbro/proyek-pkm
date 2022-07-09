@extends("layout.dashboard")

@section("main")
    <form action="/mentor/{{$mentor->id}}" method="post" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="namaMentor">Nama</label>
            <input type="text" class="form-control" required name="nama" value="{{$mentor->nama}}" id="namaMentor" placeholder="ex : Rahman Surahman">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <input type="hidden" value="{{$mentor->gambar}}" name="gambar_lama">
        <div class="form-group">
            <label for="formFile" class="form-label">Gambar <small class="form-text text-muted d-inline"><span class="text-danger">*</span>dimensi 1 x 1</small></label>
            <input class="form-control" type="file" id="formFile" name="gambar">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
            @error('gambar')
            <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" required name="deskripsi_singkat" id="exampleFormControlTextarea1" rows="1">{{$mentor->deskripsi_singkat}}</textarea>
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <button type="submit" class="btn btn-success">Edit Mentor</button>
    </form>
@endsection