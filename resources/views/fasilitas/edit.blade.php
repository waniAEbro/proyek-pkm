@extends("layout.dashboard")

@section("main")
    <form action="/fasilitas/{{$fasilitas->id}}" method="post">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" class="form-control" required name="fasilitas" value="{{$fasilitas->fasilitas}}" id="fasilitas" placeholder="ex : Masuk 3 Hari Dalam Seminggu">
        </div>
        <button type="submit" class="btn btn-success">Edit Fasilitas</button>
    </form>
@endsection