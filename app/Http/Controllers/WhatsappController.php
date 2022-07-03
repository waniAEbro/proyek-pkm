<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\Kelas;
use App\Models\Platinum;

class WhatsappController extends Controller
{
    public function whatsapp(Request $request) {
        $kelas = Kelas::get();
        $platinum = Platinum::get();
        $data = $request->all();
        $number = $data["nomor"];
        $message = $data["pesan"];

        if (preg_match("/menu/i", $message)) {
            Http::post("https://wa-pkm.herokuapp.com/send", [
				"number" => $number,
				"message" => "Berikut adalah perintah yang bisa digunakan :\n- !kelas => menampilkan kelas kelas\n- !platinum => menampilkan kelas platinum"
			]);
        } else if (preg_match("/!kelas/i", $message)) {

            $pesan = [];

            foreach ($kelas as $item) {
                $pesan[] = [
                    "title" => $item->nama,
                    "description" => $item->deskripsi_singkat
                ];
            }

            Http::post("https://wa-pkm.herokuapp.com/sendlist", [
                "number" => $number,
                "body" => "List Kelas",
                "title" => "List Kelas",
                "message" => 
                    [
                        0 => [
                            "title" => "ini pesan",
                            "rows" => $pesan
                        ]   
                    ]
            ]);
        } else if (preg_match("/!platinum/i", $message)) {

            $pesan = [];

            foreach ($platinum as $item) {
                $pesan[] = [
                    "title" => $item->nama,
                    "description" => $item->deskripsi_singkat
                ];
            }

            Http::post("https://wa-pkm.herokuapp.com/sendlist", [
                "number" => $number,
                "body" => "List platinum",
                "title" => "List platinum",
                "message" => 
                    [
                        0 => [
                            "title" => "ini pesan",
                            "rows" => $pesan
                        ]   
                    ]
            ]);
        } else if (preg_match("/kelas/i", explode(" ", $message)[0])) {
            $index = array_search(explode(" ", $message)[1], array_column($kelas->toArray(), "id"));
            if($index !== false) {
                Http::post("https://wa-pkm.herokuapp.com/send", [
                    "number" => $number,
                    "message" => "Nama Kelas : " . $kelas[$index]->nama . "\nMasa Pembelajaran : " . $kelas[$index]->masa . "\nHarga : " . $kelas[$index]->harga_baru
                ]);
            } else {
                Http::post("https://wa-pkm.herokuapp.com/send", [
                    "number" => $number,
                    "message" => "Kelas dengan ID tersebut tidak tersedia"
                ]);
            }
        } else if (preg_match("/platinum/i", explode(" ", $message)[0])) {
            $index = array_search(explode(" ", $message)[1], array_column($platinum->toArray(), "id"));
            if ($index !== false) {
                Http::post("https://wa-pkm.herokuapp.com/send", [
                    "number" => $number,
                    "message" => "Nama Platinum : " . $platinum[$index]->nama . "\nMasa Pembelajaran : " . $platinum[$index]->masa . "\nHarga : " . $platinum[$index]->harga_baru
                ]);
            } else {
                Http::post("https://wa-pkm.herokuapp.com/send", [
                    "number" => $number,
                    "message" => "Kelas Platinum dengan ID tersebut tidak tersedia"
                ]);
            }
            
        }
    }
}
