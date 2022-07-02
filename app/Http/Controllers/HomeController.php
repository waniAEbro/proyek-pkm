<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Platinum;
use App\Models\Mentor;
use App\Models\Pertanyaan;

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
}
