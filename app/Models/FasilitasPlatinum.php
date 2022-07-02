<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasPlatinum extends Model
{
    use HasFactory;
    protected $fillable = ["fasilitas_id", "platinum_id"];
    public $timestamps = false;
}
