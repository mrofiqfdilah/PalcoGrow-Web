<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deteksi extends Model
{
    use HasFactory;
    protected $table = 'deteksi';
    protected $guarded = ['id'];
}
