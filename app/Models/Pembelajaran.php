<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Platinum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }

    public function platinum()
    {
        return $this->belongsToMany(Platinum::class);
    }
}
