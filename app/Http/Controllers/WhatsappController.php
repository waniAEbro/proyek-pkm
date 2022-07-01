<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class WhatsappController extends Controller
{
    public function whatsapp(Request $request) {
        $data = $request->all();
        $number = $data["nomor"];
        $message = $data["pesan"];

        if (preg_match("/halo/i", $message)) {
            Http::post("https://wa-pkm.herokuapp.com/send", [
				"number" => $number,
				"message" => "halo juga"
			]);
        }
    }
}
