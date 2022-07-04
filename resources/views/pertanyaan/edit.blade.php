@extends("layout.dashboard")

@section("main")
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="post">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <input type="text" class="form-control" value="{{$pertanyaan->pertanyaan}}" required name="pertanyaan" id="pertanyaan" placeholder="ex : siapa saya ?">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="jawaban">Jawaban</label>
            <input type="text" class="form-control" value="{{$pertanyaan->jawaban}}" required name="jawaban" id="jawaban" placeholder="ex : Rahman Surahman">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <button type="submit" class="btn btn-success">Edit Pertanyaan</button>
    </form>
@endsection