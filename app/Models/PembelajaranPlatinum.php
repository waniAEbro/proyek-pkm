<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelajaranPlatinum extends Model
{
    use HasFactory;

    protected $fillable = ["pembelajaran_id", "platinum_id"];
    public $timestamps = false;
}
