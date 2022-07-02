@extends("layout.dashboard")

@section("main")
    <form action="/fasilitas" method="post">
        @csrf
        <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" class="form-control" required name="fasilitas" id="fasilitas" placeholder="ex : Masuk 3 Hari Dalam Seminggu">
        </div>
        <button type="submit" class="btn btn-success">Tambah Fasilitas</button>
    </form>
@endsection