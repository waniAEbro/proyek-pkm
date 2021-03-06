<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasPembelajaran extends Model
{
    use HasFactory;

    protected $fillable = ["kelas_id", "pembelajaran_id"];
    public $timestamps = false;
}
