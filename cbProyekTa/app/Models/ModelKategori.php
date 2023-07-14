<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama', 'sebentar', 'sedang', 'lama'];
}
