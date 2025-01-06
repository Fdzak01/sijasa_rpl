<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'pelayanans';

    protected $fillable = [
        'service',
        'slug',
        'thumbnail',
        'description',
        'price',
        'estimate',
        'kategori_layanans_id',
    ];

    public function kategori_layanans()
    {
        return $this->belongsTo(KategoriLayanan::class);
    }
}
