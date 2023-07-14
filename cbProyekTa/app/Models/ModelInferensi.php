<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelInferensi extends Model
{
    protected $table = 'inferensi';
    protected $fillable = [
        'game',
        'edit',
        'office',
        'programming',
        'then',
        'nilai',
    ];
}
