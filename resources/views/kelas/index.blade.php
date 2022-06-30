@extends("layout.dashboard")

@section("main")
<table class="table">
    <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Diskon</th>
            <th class="text-center">Masa</th>
            <th class="text-center">Herga Lama</th>
            <th class="text-center">Harga Baru</th>
            <th class="text-center">Deskripsi</th>
            <th class="text-center">Background</th>
            <th class="text-center">Instansi</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">2</td>
            <td>John Doe</td>
            <td>Design</td>
            <td>2012</td>
            <td class="text-right">&euro; 89,241</td>
            <td class="td-actions text-right">
                <a rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon text-white">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </a>
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="text-center" colspan="9">2</td>
            <td>
                <a href="/kelas/create" rel="tooltip" class="btn btn-info rounded-pill text-white">
                    Create
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endsection