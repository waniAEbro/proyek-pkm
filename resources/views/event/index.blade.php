@extends("layout.dashboard")

@section("main")
<table class="table">
    <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">Nama Event</th>
            <th class="text-center">Waktu Mulai</th>
            <th class="text-center">Waktu Selesai</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($event as $item)
        <tr>
            <td class="text-center">{{$item->id}}</td>
            <td class="text-center">{{$item->title}}</td>
            <td class="text-center">{{\Carbon\Carbon::parse($item->start)->format('l jS \of F Y h:i:s A')}}</td>
            <td class="text-center">{{\Carbon\Carbon::parse($item->end)->format('l jS \of F Y h:i:s A')}}</td>
            <td class="d-flex justify-content-around">
                <a rel="tooltip" href="/event/{{$item->id}}/edit" class="btn btn-success btn-sm btn-round btn-icon text-white">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </a>
                <form method="post" action="/event/{{$item->id}}" class="form-inline">
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
            <td class="text-center" colspan="4">Tambah event</td>
            <td class="text-center">
                <a href="/event/create" rel="tooltip" class="btn btn-info rounded-pill text-white">
                    Tambah
                </a>
            </td>
        </tr>
    </tbody>
</table>
<div class="d-flex">
    {!! $event->links() !!}
</div>
@endsection