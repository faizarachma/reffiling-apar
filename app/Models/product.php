<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_category_product',
        'id_subcategory_product',
        'create_sn',
        'id_product',
        'name',
        'pno',
        'price_lama',
        'price',
        'stock',
        'description',
        'minqty',
        'weight',
        'expired',
        'warranty',
        'expired_sni',
        'warranty_sni',
        'create_date',
        'status',
        'panjang',
        'lebar',
        'tinggi',
        'fire_rating',
        'media',
        'type',
        'kapasitas',
        'kelas_kebakaran',
        'tabung_silinder',

    ];
}
