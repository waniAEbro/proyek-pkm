@extends("layout.dashboard")

@section("main")
<table class="table">
    <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">Fasilitas</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fasilitas as $item)
        <tr>
            <td class="text-center">{{$item->id}}</td>
            <td class="text-center">{{$item->fasilitas}}</td>
            <td class="d-flex justify-content-around">
                <a rel="tooltip" href="/fasilitas/{{$item->id}}/edit" class="btn btn-success btn-sm btn-round btn-icon text-white">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </a>
                <form method="post" action="/fasilitas/{{$item->id}}" class="form-inline">
                    @method("delete")
                    @csrf
                    <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td class="text-center" colspan="2">Tambah Fasilitas</td>
            <td class="text-center">
                <a href="/fasilitas/create" rel="tooltip" class="btn btn-info rounded-pill text-white">
                    Tambah
                </a>
            </td>
        </tr>
    </tbody>
</table>
<div class="d-flex">
    {!! $fasilitas->links() !!}
</div>
@endsection