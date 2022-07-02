<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKelas extends Model
{
    use HasFactory;
    protected $fillable = ["fasilitas_id", "kelas_id"];
    public $timestamps = false;
}
