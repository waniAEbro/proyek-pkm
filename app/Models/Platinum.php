<?php

namespace App\Models;

use App\Models\Fasilitas;
use App\Models\Pembelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Platinum extends Model
{
    protected $guarded = ["id"];
    use HasFactory;

    public function fasilitas() {
        return $this->belongsToMany(Fasilitas::class);
    }

    public function pembelajaran() {
        return $this->belongsToMany(Pembelajaran::class);
    }
}
