@extends("layout.dashboard")

@section("main")
<table class="table">
    <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Diskon</th>
            <th class="text-center">Masa</th>
            <th class="text-center">Harga Lama</th>
            <th class="text-center">Harga Baru</th>
            <th class="text-center">Deskripsi</th>
            <th class="text-center">Background</th>
            <th class="text-center">Instansi</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($platinum as $item)
        <tr>
            <td class="text-center">{{$item->id}}</td>
            <td class="text-center">{{$item->nama}}</td>
            <td class="text-center">@if ($item->diskon !== null) {{$item->diskon}} @else 0 @endif %</td>
            <td class="text-center">{{$item->masa}}</td>
            <td class="text-center">{{$item->harga_lama}}</td>
            <td class="text-center">{{$item->harga_baru}}</td>
            <td class="text-center">{{$item->deskripsi_singkat}}</td>
            <td class="text-center">{{$item->background}}</td>
            <td class="text-center">{{$item->instansi}}</td>
            <td class="d-flex justify-content-around">
                <a rel="tooltip" href="/platinum/{{$item->id}}/edit" class="btn btn-success btn-sm btn-round btn-icon text-white">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </a>
                <form method="post" action="/platinum/{{$item->id}}" class="form-inline">
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
            <td class="text-center" colspan="9">Tambah platinum</td>
            <td class="text-center">
                <a href="/platinum/create" rel="tooltip" class="btn btn-info rounded-pill text-white">
                    Tambah
                </a>
            </td>
        </tr>
    </tbody>
</table>
<div class="d-flex">
    {!! $platinum->links() !!}
</div>
@endsection