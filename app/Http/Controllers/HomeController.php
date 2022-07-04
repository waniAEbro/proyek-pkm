<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kelas;
use App\Models\Mentor;
use App\Models\Platinum;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home () {
        return view ( "homepage.index", [
            "title" => "Home",
            "kelas" => Kelas::get(),
            "platinum" => Platinum::get(),
            "mentor" => Mentor::get(),
            "pertanyaan" => Pertanyaan::get()
        ] );
    }

    public function about(){
        return view ( "homepage.about",
        [ "title" => "About"]);
    }

    public function showKelas($id) {
        $kelas = Kelas::find($id);
        return view("kelas.show", [
            "title" => $kelas->nama,
            "kelas" => $kelas
        ]);
    }

    public function showPlatinum($id) {
        $platinum = Platinum::find($id);
        return view("platinum.show", [
            "title" => $platinum->nama,
            "platinum" => $platinum
        ]);
    }

    public function showEvent() {
        return view('event.event', [
            "event" => Event::get()->toJson(),
            "title" => "Event"
        ]);
    }
}
