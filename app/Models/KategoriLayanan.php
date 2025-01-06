<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriLayanan extends Model
{
    protected $table = 'kategori_layanans';

    protected $fillable = [
        'kategori',
        'slug',
        'icon',
    ];
}
